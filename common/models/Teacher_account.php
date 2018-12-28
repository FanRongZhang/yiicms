<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 teacher_account-表的模型类 
* @property integer $id   
* @property string $zhanghao   
* @property string $mima   
* @property integer $teacher_id   
* @property integer $ban   
* @property datetime $create_datetime   
* @property string $token   
* @property integer $user_id   
*/
class Teacher_account extends \yii\db\ActiveRecord
{
      use Teacher_accountTrait;
     public static function tableName(){
         return 'teacher_account';
     }
}
