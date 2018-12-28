<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 netcoursecategory-网络课程分类表的模型类 
* @property integer $id   
* @property string $category   分类英文名
* @property string $name   分类中文名
* @property integer $pid   上级编号
* @property integer $created_at   
*/
class Netcoursecategory extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'netcoursecategory';
     }
}
