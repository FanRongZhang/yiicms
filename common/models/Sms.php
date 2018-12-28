<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 sms-短信发送表的模型类 
* @property integer $id   
* @property integer $code   验证码 
* @property string $tel   用户手机
* @property integer $created_at   创建时间
*/
class Sms extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'sms';
     }
}
