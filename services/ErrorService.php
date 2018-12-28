<?php
namespace app\services;

use yii\base\ErrorHandler;
use common\models\Applog;
use yii\web\NotFoundHttpException;
use yii\web\Response;

/**
 * PC & WAP网站 异常处理
 * @package app\services
 */
class ErrorService extends \yii\web\ErrorHandler {
    /**
     * Renders the exception.
     * @param \Exception $exception the exception to be rendered.
     */
    public function renderException($exception){
        if($exception instanceof NotFoundHttpException){
            $response = new Response();
            $response->data = 'the resource was gone.';
            $response->setStatusCode(404);
            $response->send();
        }elseif(YII_DEBUG){
            parent::renderException($exception);
        }else{
            $response = new Response();
            $response->setStatusCode(500);
            $response->data = 'seems we occured some problems.';
            $response->send();
        }
    }

    /**
     * Logs the given exception
     * @param \Exception $exception the exception to be logged
     * @since 2.0.3 this method is now public.
     */
    public function logException($exception)
    {
        if($exception instanceof NotFoundHttpException){
           return;
        }
		parent::logException($exception);
    }
}