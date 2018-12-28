<?php
namespace console\controllers;

use app\services\ContentModelService;
use app\services\GenerateTableModelService;
use crazyfd\qiniu\Qiniu;
use yii\db\Exception;

require_once (\Yii::getAlias('@common').'/../services/simple_html_dom.php');
class QiniudomainController extends \yii\console\Controller{

    public function actionGo(){

        $this->go();

        /*
        $hour = intval(date('H'));
        if($hour == 2){
            $this->go();
        }else{
            echo 'sleep 100 sec' . PHP_EOL;
            sleep(100);
            $this->actionGo();
        }
        */
    }

    private function go(){

        echo 'start at '.date('Y-m-d H:i:s') . PHP_EOL;
        $oldDomain = 'file.haiwon.com';
        $newDomain = 'file.bishangjiaoyu.com';

        $oldDomain2 = 'bishang.org';
        $newDomain2 = 'bishangjiaoyu.com';

        $dbName = ContentModelService::getDBName();
        $aryTables = \Yii::$app->db->createCommand('select table_name,table_comment from information_schema.tables where table_schema=\''.$dbName.'\'')->queryAll();
        foreach($aryTables as $oneTable){

            $tableName = $oneTable['table_name'];

            $model = GenerateTableModelService::getAQObjectByTableName($tableName);
            $aryColoumns = \Yii::$app->db->createCommand('select COLUMN_NAME,DATA_TYPE,COLUMN_COMMENT,COLUMN_TYPE,CHARACTER_MAXIMUM_LENGTH,COLUMN_KEY from information_schema.`COLUMNS` where table_schema=\'' . $dbName . '\' and TABLE_NAME=\'' . $tableName . '\';')->queryAll();

            $page = 0;
            $pageSize = 100;
            $limit = 100;

            while (++$page) {

                $list = $model->find()->offset(($page-1)*$pageSize)->limit($limit)->all();

                if(!$list){
                    break;
                }

                foreach ($list as $oneModel) {

                    foreach ($aryColoumns as $oneColumn) {
                        $columnName = $oneColumn['COLUMN_NAME'];

                        $old = $oneModel->$columnName;
                        if (is_string($old) && ( strpos($old, $oldDomain) !== false ||   strpos($old, $oldDomain2) !== false) ) {
                            $old = str_replace(
                                [
                                    $oldDomain,
                                    $oldDomain2
                                ],
                                [
                                    $newDomain,
                                    $newDomain2
                                ],$old);
                            $oneModel->$columnName = $old;
                        }

                    }

                    $oneModel->save();

                }


            }

        }

        echo 'end at '.date('Y-m-d H:i:s') . PHP_EOL;
    }

}