<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 tagandcategory-TAG和资讯分类，可充当统计TAG和资讯分类的临时表表的模型类 
* @property integer $id   
* @property string $tag   
* @property integer $category   
*/
class Tagandcategory extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'tagandcategory';
     }
}
