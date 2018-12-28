<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 msgnoticeforbackenduser-给后台用户的通知表的模型类 
* @property integer $id   
* @property string $msg   消息
* @property integer $hadread   
* @property string $link   link
* @property datetime $createtime_datetime   
*/
class Msgnoticeforbackenduser extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'msgnoticeforbackenduser';
     }
}
