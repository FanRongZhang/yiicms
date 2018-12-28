<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 accountbindcodeforwechat-给微信扫码绑定帐号的暗号表的模型类 
* @property integer $id   
* @property integer $userid   
* @property string $code   给微信扫码绑定帐号的暗号码
* @property integer $create_at   
*/
class Accountbindcodeforwechat extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'accountbindcodeforwechat';
     }
}
