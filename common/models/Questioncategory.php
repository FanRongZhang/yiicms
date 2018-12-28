<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 questioncategory-问题分类表的模型类 
* @property integer $id   
* @property integer $category   问题分类
* @property integer $created_at   
*/
class Questioncategory extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'questioncategory';
     }
}
