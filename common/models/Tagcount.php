<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 tagcount-资讯分类ID和TAG名称分组后的记录数表的模型类 
* @property integer $id   
* @property string $tag   
* @property integer $category   
* @property integer $count   
*/
class Tagcount extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'tagcount';
     }
}
