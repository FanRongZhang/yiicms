<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 roles-角色表表的模型类 
* @property integer $id   
* @property string $name   角色名称
* @property integer $parentid   继承的父类角色
* @property string $description   
* @property integer $created_at   
* @property integer $updated_at   
*/
class Roles extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'roles';
     }
}
