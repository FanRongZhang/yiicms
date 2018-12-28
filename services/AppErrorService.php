<?php
namespace app\services;

use yii\base\ErrorHandler;
use common\models\Applog;
use yii\web\NotFoundHttpException;
use yii\web\Response;

/**
 * APP异常处理
 * @package app\services
 */
class AppErrorService extends \yii\web\ErrorHandler {
    /**
     * Renders the exception.
     * @param \Exception $exception the exception to be rendered.
     */
    public function renderException($exception){
        header('Access-Control-Allow-Origin: *');
        $response = new Response();
        $response->format = \yii\web\response::FORMAT_JSON;
        $response->content = \GuzzleHttp\json_encode([
            "code" => 500,
            "msg" => $exception->getMessage(),
            "data" => []
        ]);
        $response->statusCode = 500;
        $response->send();
        exit();
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