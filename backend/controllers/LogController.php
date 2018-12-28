<?php
namespace backend\controllers;

use app\services\FileScanService;
use common\models\Applog;
use yii\db\ActiveQuery;
use yii\helpers\ArrayHelper;

class LogController extends BasewebController{

    public function actionNginx()
    {
        $aryFileInfo = [];
        $files = FileScanService::getAllFileInTheDir('/var/log/nginx');
        foreach ($files as $f){
            $aryFileInfo[] = [
                'src' => $f,
                'mtime' => filemtime($f),
                'size' => filesize($f)
            ];
        }
        ArrayHelper::multisort($aryFileInfo, ['mtime'], [SORT_DESC]);
        return $this->render('nginx',[
            'files' => $aryFileInfo
        ]);
    }

    public function actionDown(){
        return $this->response->sendFile($this->getParam('path'));
    }

    public function actionDelete(){
        unlink($this->getParam('path'))?exit('删除成功'):exit('删除失败');
    }

    public function actionApp(){
        return $this->render('app',$this->getPageData(Applog::find()->orderBy('id desc'),$this->page));
    }

    public function actionDelapplog(){
        Applog::deleteAll();
        return $this->redirect('app');
    }

    public function actionQueue(){
        return $this->render('queue');
    }

    public function actionPm(){
        return file_get_contents('http://x.com/pmstatus?full&html');
    }

    public function actionGinx(){
        return file_get_contents('http://x.com/ngstatus');
    }

    public function actionSlowsql(){
        $ary =  \Yii::$app->db->createCommand("show variables like '%slow%';")->queryAll();
        $aryData = [];
        foreach ($ary as $one){
            $aryData[$one['Variable_name']] = $one['Value'];
        }

        return $this->render('slowsql', [
            'slow_query_log' => $aryData['slow_query_log'],
            'slow_query_log_file' => $aryData['slow_query_log_file'],

            'ary' => \Yii::$app->db->createCommand("select * from mysql.general_log")->queryAll()
        ]);
    }

    public function actionClearslow(){
        \Yii::$app->db->createCommand("delete mysql.general_log")->execute();
        return $this->redirect('/log/slowsql');
    }

}