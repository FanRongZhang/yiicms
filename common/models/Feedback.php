<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 feedback-表的模型类 
* @property integer $id   
* @property string $whatsup   问题内容
* @property string $contact   用户联系方式
* @property string $ip   客户端IP地址
* @property integer $is_done   是否解决 0未解决 1已解决
* @property datetime $create_datetime   
* @property integer $user_id   
*/
class Feedback extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'feedback';
     }
}
