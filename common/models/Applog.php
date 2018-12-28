<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 applog-应用查询异常或错误记录表的模型类 
* @property integer $id   
* @property string $type   异常类型
* @property string $file   文件
* @property integer $line   行
* @property string $msg   异常消息
* @property string $trace   跟踪信息
* @property integer $created_at   
*/
class Applog extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'applog';
     }
}
