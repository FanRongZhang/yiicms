<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 department-部门表的模型类 
* @property integer $id   
* @property string $name   部门名称
*/
class Department extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'department';
     }
}
