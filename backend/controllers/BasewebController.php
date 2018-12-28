<?php
namespace backend\controllers;

use app\services\MsgcodeService;
use yii\data\Pagination;
use yii\db\ActiveQuery;
use yii\web\Controller;
use common\models\Adminuser;
use common\models\Roles;
use common\models\Rolerights;
use common\models\Access;
use common\models\Roleusers;


/**
 * 后台
 * Class IndexController
 * @package backend\controllers
 */
class BasewebController extends Controller
{

    public $bartitle;

    public $layout = 'main';

    protected $param;

    /**
     * 请求网页的第几页
     * @var integer
     */
    public $page;

    /**
     * @var \Yii::$app->request
     */
    protected $request;


    /**
     * @var \Yii::$app->response
     */
    protected $response;

    /**
     * @var Pagination
     */
    public $pagination;

    /**
     * 当前登录的用户
     * @var \common\models\Adminuser
     */
    public $user;

    public $userid;

    public function getHostInfo(){
        return $this->request->hostInfo;
    }

    /**
     * 返回ar[]数组和分页对象
     * @param ActiveQuery $query
     * @param number $page
     * @param number $pageSize
     * @param string $asArray
     * @return \yii\data\Pagination[]|array[]|\yii\db\ActiveRecord[][]
     */
    public function getPageData(ActiveQuery $query,$page=1,$pageSize=20,$asArray = false){
        $pagination= new Pagination([
            'totalCount' =>$query->count(),
            'pageSize' => $pageSize
        ]);
        $data = $query->offset(($page-1)*$pageSize)->limit($pagination->limit)->asArray($asArray)->all();
        $this->pagination = $pagination;
        return [
            'list'=>$data,
            'pages'=>$pagination
        ];
    }

    public function back(){
        return $this->response->redirect($this->request->getReferrer());
    }

    /**
     * @param string $id the ID of this controller.
     * @param Module $module the module that this controller belongs to.
     * @param array $config name-value pairs that will be used to initialize the object properties.
     */
    public function __construct($id, $module, $config = [])
    {
        ini_set('upload_tmp_dir', \Yii::getAlias('@backend') . '/runtime/temp');

        //ini_set('session.gc_maxlifetime', 3600 * 60000);
        parent::__construct($id, $module, $config);

        $this->request = \Yii::$app->request;
        $this->response = \Yii::$app->response;

        if($this->request->getIsAjax()){
            $this->layout = false;
        }

        //all param name is lower
        $this->param = array_merge($this->request->get(),$this->request->post());
        foreach ($this->param as $k=>$v){
            $lower_key = strtolower($k);
            if($k!=$lower_key){
                unset($this->param[$k]);
                $this->param[$lower_key] = $v;
            }
        }

        $this->page = $this->getParam('page') ? intval($this->getParam('page')) : 1;

        //open session
        \Yii::$app->session->open();
        $this->user = $this->getCurrentAdminUser();
        if($this->user){
            $this->setCurrentAdminUser($this->user);
        }

        if(strpos($this->request->getUrl(), '/index/login')!==0 && !$this->user){
            $this->goToLogin();
        }

        /*
        $oneAccess = Access::findOne([
            'url'=>$this->request->getUrl()
        ]);
        $roleuser = Roleusers::findOne(['userid' => $this->userid]);
        if($oneAccess && $roleuser->roleid != 1) {
            $accessList = Rolerights::findAll(['roleid' => $roleuser->roleid]);
            foreach ($accessList as $v) {
                $accessIdAry[] = $v['accessid'];
            }
            $accessIdAry[] = 5;

            if (!in_array($oneAccess->id, $accessIdAry)) {
                return $this->redirect("/index/no-access");
            }
        }
        */
    }


    /**
     * get request param value
     * @param string $name
     * @return boolean
     */
    public function getParam($name){
        $name = strtolower($name);
        if(!isset($this->param[$name])){
            return false;
        }
        return $this->param[$name];
    }


    public function getCurrentAdminUser(){
        return isset($_SESSION['backenduser']) ? $_SESSION['backenduser'] : false;
    }

    public function setCurrentAdminUser(Adminuser $user){
        $_SESSION['backenduser'] = $user;
    }

    /**
     * come back after login from wx
     * @param string $httpAbsoluteUrl  access url when come back
     */
    public function goToLogin(){
        exit('<script>location.href = \'/index/login\'</script>');
    }

    /**
     * need to have be login,or go to login
     */
    public function needToLogin(){
        if(!$this->user){
            $this->goToLogin();
        }
    }

    public function logout(){
        $session = \yii::$app->session;
        $session->remove('backenduser');
        $this->user = null;
    }

    public function return404(){
        return $this->renderPartial('/../404');
    }

    public function jsonSuccess($data=[]){
        $this->response->format = \yii\web\response::FORMAT_JSON;
        return [
            'code'=>MsgcodeService::OP_SUCCESS,
            'msg'=>MsgcodeService::getRetMsg(MsgcodeService::OP_SUCCESS),
            'data'=>$data
        ];
    }

    public function jsonFail($code=MsgcodeService::OP_FAILRE){
        $this->response->format = \yii\web\response::FORMAT_JSON;
        return [
            'code'=>$code,
            'msg'=>MsgcodeService::getRetMsg($code)
        ];
    }

    public function jsonPure(&$data){
        $this->response->format = \yii\web\response::FORMAT_JSON;
        return $data;
    }

    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;
        // ...set `$this->enableCsrfValidation` here based on some conditions...
        // call parent method that will check CSRF if such property is `true`.
        return parent::beforeAction($action);
    }

    /**
     * 添加提示信息
     * @param $msg
     */
    public function addAlertInfo($msg){
        \Yii::$app->session->addFlash('alert',$msg);
    }


    /**
     * 将一个有 pid text 的数据数组中的text进行重新赋值
     * 从而达到格式化显示父子关系
     * @param $aryCollection
     * @param int $pid
     * @param int $topLevel
     * @return array
     */
    public function selectTree($aryCollection, $pid = 0, $topLevel = 0)
    {
        static $finalTextFormatArray = [];
        foreach ($aryCollection as $oneArray) {
            if ($pid == $oneArray['pid']) {
                if(isset($oneArray['text'])) {
                    $oneArray['name'] =  $oneArray['text'] = ($topLevel != 0 ? '|' : '') . str_repeat('---------', $topLevel) . $oneArray['text'];
                }elseif(isset($oneArray['name'])){
                    $oneArray['text'] = $oneArray['name'] = ($topLevel != 0 ? '|' : '') . str_repeat('---------', $topLevel) . $oneArray['name'];
                }
                $finalTextFormatArray[] = $oneArray;
                $temp = $topLevel + 1;

                $this->selectTree($aryCollection, $oneArray['id'], $temp);
            }
        }
        return $finalTextFormatArray;
    }
}