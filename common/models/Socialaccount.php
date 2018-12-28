<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 socialaccount-社交帐号表的模型类 
* @property integer $id   
* @property string $from   来自哪个，比如 weibo 
* @property string $unionid   UNIONID
* @property string $openid   openid
* @property integer $userid   绑定的帐号，默认未绑定
* @property integer $createtime   创建时间
* @property integer $subscribe   
* @property string $nickname   昵称名
* @property string $face   头像地址
* @property string $social_account_token   身份标识
* @property string $temp_json_data   针对该临时用户的临时性质数据存储
*/
class Socialaccount extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'socialaccount';
     }
}
