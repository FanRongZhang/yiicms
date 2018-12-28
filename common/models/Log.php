<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 log-表的模型类 
* @property integer $id   
* @property integer $level   
* @property string $category   
* @property double $log_time   
* @property string $prefix   
* @property string $message   
*/
class Log extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'log';
     }
}
