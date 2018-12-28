<?php
namespace backend\controllers;

class CodeController extends BasewebController{

    public function actionProcess()
    {

        $codeFile = \Yii::getAlias('@backend/views/code/code.txt');
        if (file_exists($codeFile) && is_writable($codeFile)) {
            file_put_contents($codeFile, $this->getParam('code'));
            include $codeFile;
        } else {
            $path = pathinfo(__FILE__);
            echo "Create a writable file <b>code.txt</b> first";
        }
        exit;

    }

}