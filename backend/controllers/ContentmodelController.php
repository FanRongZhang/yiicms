<?php
namespace backend\controllers;

use app\services\ContentModelService;
use app\services\CrawlerService;
use app\services\FieldValueTypeService;
use app\services\GenerateTableModelService;
use app\services\PublicNoticeNotifyService;
use common\models\Articlecategory;
use common\models\Crawlerarticle;
use common\models\Crawlerarticlelistpage;
use common\models\Model;
use common\models\Modelfield;
use common\models\Exam;
use common\models\Publicnotice;
use QL\QueryList;
use yii\data\Pagination;
use yii\db\Exception;
use yii\db\Migration;
use yii\db\Query;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

/**
 * 内容模型
 * @package backend\controllers
 */
class ContentmodelController extends BasewebController
{

    /**
     * 模型列表
     * @return string
     */
    public function actionList()
    {
        return $this->render('list',
            $this->getPageData(Model::find()->orderBy('id desc'), $this->page)
        );
    }

    /**
     * 模型列查看
     * @return string
     */
    public function actionListColumns()
    {
        if($this->request->isAjax){
            $dataid = $this->getParam('dataid');
            $ordernum = $this->getParam('ordernum');
            $modelColumns = Modelfield::findOne(['id'=>$dataid]);
            $modelColumns->listorder = $ordernum;
            $modelColumns->save();
            echo 'success';
        }else{
            return $this->render('listcolumns', [
                'model' => Model::findOne($this->getParam('modelid')),
                'list' => Modelfield::find()->where([
                    'modelid' => intval($this->getParam('modelid'))
                ])->orderBy('listorder desc')->all()
            ]);
        }
    }

    /**
     * 数据查看
     * @return string
     */
    public function actionListData()
    {

        $category = Articlecategory::findOne(intval($this->getParam('categoryid')));
        $model = Model::findOne($category->modelid);

        $fields = Modelfield::findAll([
            'modelid' => $model->id
        ]);

        $aryData = [
            'model' => $model,
            'fields' => $fields
        ];

        $where = ' category= ' . $category->id . ' and is_deleted=0 ' ;
        $aryParams = [];
        $aryTableParam = $this->getParam($model->tablename);
        if($aryTableParam){
            foreach ($aryTableParam as $k => $v){
                if( !is_numeric($v) && !trim($v) ){
                    continue;
                }else{
                    $_include = false;
                    foreach ($fields as $oneField){
                        //模糊查询
                        if($oneField->issearch && $oneField->field == $k && $oneField->issearchinlikestyle){
                            $where  .= " and $k like :$k";
                            $aryParams[':'.$k] = '%'.$v.'%';
                            $_include = true;
                            break;
                        }
                    }
                    if(!$_include){
                        $where  .= " and $k = :$k";
                        $aryParams[':'.$k] = $v;
                    }
                }
            }
        }

        $pageSize = 20;
        $query = new \yii\db\Query();
        $list = $query->from($model->tablename)->where($where)->addParams($aryParams)->orderBy('id desc')->offset(($this->page -1 )*$pageSize)->limit($pageSize)->all();
        $pagination= new Pagination([
            'totalCount' =>$query->from($model->tablename)->where($where)->addParams($aryParams)->count(),
            'pageSize' => $pageSize
        ]);
        $this->pagination = $pagination;
        $resultData = [
            'list' => $list,
            'category' => $category
        ];

        $aryData = ArrayHelper::merge(
            $aryData,
            $resultData
        );
        $aryData['aryparams'] = $aryTableParam;
        return $this->render('listdata' , $aryData);
    }

    /**
     * 创建一个新的模型
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        if ($this->request->isGet) {
            return $this->render('create');
        } else {
            $model = new Model();
            $model->setAttributes($this->param, false);
            if (ContentModelService::createNewModel($model)) {
                $this->addAlertInfo('操作成功');
                return $this->redirect('list');
            } else {
                $this->addAlertInfo('操作失败');
                return $this->redirect('create');
            }
        }
    }

    /**
     *创建一个新的模型字段
     */
    public function actionAddNewField()
    {
        $model = Model::findOne(intval($this->getParam('modelid')));
        $aryFieldValueType = FieldValueTypeService::getAllTypes();
        $theFieldValueType = null;
        if( $theTypeName = $this->getParam('fieldvaluetype')){
            foreach ($aryFieldValueType as $typeName => $object){
                if($theTypeName == $typeName){
                    $theFieldValueType = $object;
                    break;
                }
            }
        }

        if( !$theFieldValueType ){
            foreach ($aryFieldValueType as $typeName => $object){
                $theFieldValueType = $object;
                break;
            }
        }

        if ($this->request->isGet) {
            return $this->render('addnewfield', [
                'aryFieldValueType' => $aryFieldValueType,
                'theFieldValueType' => $theFieldValueType,
                'contentModel' => $model
            ]);
        }elseif($this->request->isAjax){
            echo $theFieldValueType->settingUI();
            exit;
        } else {
            $aryInfo = $_POST['info'];
            //将设置转为JSON字符串存储到数据库
            $aryInfo['setting'] = isset($_POST['setting']) ? json_encode($_POST['setting']) : json_encode([]);

            $modelField = new Modelfield();
            $modelField->setAttributes($aryInfo, false);

            if (!$modelField->field || !trim($modelField->field) || !$modelField->name || !trim($modelField->name)) {
                $this->addAlertInfo('字段和名称必须有');
                return $this->redirect(Url::current());
            }

            if (strtolower(trim($modelField->field)) == 'id') {
                $this->addAlertInfo('字段id为保留字');
                return $this->redirect(Url::current());
            }

            if (Modelfield::findOne([
                'modelid' => $model->id,
                'field' => $modelField->field
            ])) {
                $this->addAlertInfo('该字段已经存在');
                return $this->redirect(Url::current());
            }

            if (ContentModelService::createNewField($model, $modelField)) {
                $this->addAlertInfo('操作成功');
                return $this->redirect('list');
            } else {
                $this->addAlertInfo('操作失败');
                return $this->redirect(Url::current());
            }
        }
    }


    /**
     * 修改模型字段
     */
    public function actionEditField()
    {
        $model = Model::findOne(intval($this->getParam('modelid')));
        $modelField = Modelfield::findOne(intval($this->getParam('modelfieldid')));

        if ($this->request->isGet) {
            return $this->render('editfield', [
                'theFieldValueType' => FieldValueTypeService::getTheType($modelField->fieldvaluetype),
                'contentModel' => $model,
                'modelField' => $modelField,
            ]);
        } else {
            $aryInfo = $_POST['info'];
            //将设置转为JSON字符串存储到数据库
            $aryInfo['setting'] = isset($_POST['setting']) ? json_encode($_POST['setting']) : json_encode([]);

            $modelField->setAttributes($aryInfo, false);

            if (!$modelField->field || !trim($modelField->field) || !$modelField->name || !trim($modelField->name)) {
                $this->addAlertInfo('字段和名称必须有');
                return $this->redirect(Url::current());
            }

            if (strtolower(trim($modelField->field)) == 'id') {
                $this->addAlertInfo('字段id为保留字');
                return $this->redirect(Url::current());
            }

            if (ContentModelService::editField($model, $modelField)) {
                $this->addAlertInfo('操作成功');
                return $this->redirect('list');
            } else {
                $this->addAlertInfo('操作失败');
                return $this->redirect(Url::current());
            }
        }
    }


    /**
     * 删除模型字段
     */
    public function actionDelField()
    {
        $model = Model::findOne(intval($this->getParam('modelid')));
        $modelField = Modelfield::findOne(intval($this->getParam('modelfieldid')));
        if(ContentModelService::isDelAble($model,$modelField)){
            if($this->request->isGet){
                echo '<center><form method="post">请输入确认指令回车：<input type="text" style="height: 50px;line-height: 50px;font-size:30px;color:green;" name="pwd"/> </form></center>';
            }else{

                if($this->getParam('pwd') == 'zrf') {
                    $succ = ContentModelService::delField($model, $modelField);
                    echo $succ ? '删除成功' : '删除失败';
                    return $this->redirect(Url::current());
                }else{
                    echo '无效的确认指令';
                }

            }
        }else{
            echo '<h3>受保护字段不能删除</h3>';
        }

        exit;
    }


    private function selectTree($aryCollection, $pid = 0, $topLevel = 0)
    {
        static $res = [];
        foreach ($aryCollection as $key => $vo) {
            if ($pid == $vo['pid']) {
                $vo['text'] =  ($topLevel != 0 ? '|' : '') . str_repeat('---------', $topLevel) . $vo['text'];
                $res[] = $vo;
                $temp = $topLevel + 1;

                $this->selectTree($aryCollection, $vo['id'], $temp);
            }
        }
        return $res;
    }

    /**
     * 向一个内容模型写入数据
     */
    public function actionAddNewRecord()
    {
        $category = Articlecategory::findOne(intval($this->getParam('categoryid')));
        $exam = false;
        if($this->getParam('fromcrawlerarticle')){
            $listpage = Crawlerarticlelistpage::findOne($this->getParam('listpageid'));
            $exam = Exam::findOne($listpage->examid);
        }

        if(!$exam && $this->getParam('examid')){
            $exam = Exam::findOne($this->getParam('examid'));
        }

        $model = Model::findOne($category->modelid);

        $aryModelFields = Modelfield::find()->where([
            'modelid' => $model->id
        ])->orderBy('listorder desc')->all();
        $aryFieldValueType = FieldValueTypeService::getAllTypes();
        if ($this->request->isGet) {
            $aryExam = Exam::find()->orderBy('id desc')->all();
            $categoryList = Articlecategory::find()->select('id,pid,text,iscontentcategory')->orderBy('id asc')->asArray()->all();
            $categoryList = $this->selectTree($categoryList);
            $data =  [
                'category' => $category,
                'contentModel' => $model,
                'aryFieldValueType' => $aryFieldValueType,
                'aryModelFields' => $aryModelFields,
                'aryExam' => $aryExam,
                'categoryList' => $categoryList,
                'exam' => $exam
            ];
            if($this->getParam('fromcrawlerarticle')){
                $crawlerArticle = Crawlerarticle::findOne($this->getParam('articleid'));
                $data += [
                    'crawlerArticle' => $crawlerArticle
                ];
            }


            return $this->render('addnewrecord', $data);
        } else {
            $aryAllDBData = $_POST[$model->tablename];
            $aryAllDBData['editor'] = $this->user->id;
            $examid = $_POST[$model->tablename]['examid'];

            if ($recordID = ContentModelService::createNewRecord($aryAllDBData, $model)) {

                if(intval($_POST['pushtowdz']) == 1){
                    //PublicNoticeNotifyService::pushToQueue($model->id, $recordID);
                }

                $this->addAlertInfo('操作成功');
                if($this->haveExtInfo($_POST[$model->tablename]['category'])){
                    return $this->redirect('/extcontent/info?tabledataid='.$recordID.'&category='.$category->id.'&examid='.$examid);
                }
                return $this->redirect(Url::current());

            } else {
                $this->addAlertInfo('操作失败');
                return $this->redirect(Url::current(['examid'=>$examid]));
            }
        }
    }

    /**
     * 编辑一个内容模型的记录
     */
    public function actionEditRecord()
    {
        $category = Articlecategory::findOne(intval($this->getParam('categoryid')));
        $model = Model::findOne($category->modelid);
        $aryTheRecord = GenerateTableModelService::getAQObjectByTableName($model->tablename)->find()->where([
            'id' => intval($this->getParam('recordid'))
        ])->asArray()->one();

        $aryModelFields = Modelfield::find()->where([
            'modelid' => $model->id
        ])->orderBy('listorder desc')->all();
        $aryFieldValueType = FieldValueTypeService::getAllTypes();
        if ($this->request->isGet) {
            $examObj = Exam::find()->all();
            $categoryList = Articlecategory::find()->select('id,pid,text,iscontentcategory')->orderBy('id asc')->asArray()->all();
            $categoryList = $this->selectTree($categoryList);

            return $this->render('editrecord', [
                'category' => $category,
                'contentModel' => $model,
                'aryFieldValueType' => $aryFieldValueType,
                'aryModelFields' => $aryModelFields,
                'aryTheRecord' => $aryTheRecord,
                'categoryList' => $categoryList,
                'examObj' => $examObj
            ]);
        } else {
            $aryAllDBData = $_POST[$model->tablename];
            $aryAllDBData['content'] = isset($aryAllDBData['content'])?str_replace('<hr/>','_ueditor_page_break_tag_',$aryAllDBData['content']):'';

            if (ContentModelService::updateNewRecord($aryAllDBData, $model)) {

                if(intval($_POST['pushtowdz']) == 1){
                    //PublicNoticeNotifyService::pushToQueue($model->id, intval($this->getParam('recordid')));
                }

                $this->addAlertInfo('操作成功');
                return $this->redirect(Url::current());
            } else {
                $this->addAlertInfo('操作失败');
                return $this->redirect(Url::current());
            }
        }
    }

    /**
     * 删除一个无内容的内容模型
     * @throws \Exception
     */
    public function actionDelModel(){
        $model = Model::findOne(intval($this->getParam('modelid')));
        if(GenerateTableModelService::getAQObjectByTableName($model->tablename)::find()->count() > 0){
            exit('该表存在数据记录，无法删除');
        }
        $trans = Model::getDb()->beginTransaction();
        try{
            Articlecategory::deleteAll([
                'modelid' => $model->id
            ]);

            if(Modelfield::deleteAll([
                'modelid' => $model->id
            ])==0){
                throw new Exception('删除记录失败'.__LINE__);
            }

            $migrate = new Migration();
            $migrate->dropTable($model->tablename);

            if(!$model->delete()){
                throw new Exception('删除记录失败'.__LINE__);
            };
        }catch (\Exception $e){
            $trans->rollBack();
            throw $e;
        }
        echo '删除成功';
    }

    public function actionDelRecord(){
        $id = $this->getparam('id');
        $modelid = $this->getParam('modelid');
        $modelObj = Model::findOne(['id'=>$modelid]);
        $tableName = $modelObj->tablename;
        \Yii::$app->db->createCommand()->update($tableName, ['is_deleted' => 1], "id = $id")->execute();
        return $this->jsonSuccess();
    }

    public function actionDetailRecord(){
        $category = Articlecategory::findOne(intval($this->getParam('categoryid')));
        $model = Model::findOne($category->modelid);
        $aryTheRecord = GenerateTableModelService::getAQObjectByTableName($model->tablename)->find()->where([
            'id' => intval($this->getParam('recordid'))
        ])->asArray()->one();

        return $this->render('detailrecord',[
            'aryTheRecord'=>$aryTheRecord
        ]);
    }


}