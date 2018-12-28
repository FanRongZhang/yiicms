<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 adminuser-表的模型类 
* @property integer $id   
* @property string $username   
* @property string $auth_key   
* @property string $password_hash   
* @property string $password_reset_token   
* @property string $email   
* @property integer $status   
* @property integer $created_at   
* @property integer $updated_at   
*/
class Adminuser extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'adminuser';
     }
}
