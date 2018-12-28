<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 phonevalidcode-短信信息发送记录表的模型类 
* @property integer $id   
* @property string $phone   手机号码
* @property string $validcode   验证码
* @property integer $expire_at   过期时间在
* @property integer $is_used   是否被使用了
* @property integer $created_at   
*/
class Phonevalidcode extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'phonevalidcode';
     }
}
