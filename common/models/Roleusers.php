<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 roleusers-登记注册那些需要管制的访问地址表的模型类 
* @property integer $id   
* @property string $roleid   角色
* @property integer $userid   用户
* @property integer $created_at   
* @property integer $updated_at   
*/
class Roleusers extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'roleusers';
     }
}
