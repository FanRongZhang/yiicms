<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 standbyexammeans-备考资料表的模型类 
* @property integer $id   
* @property integer $category   分类
* @property integer $title   标题
* @property string $content   内容
* @property integer $created_at   
*/
class Standbyexammeans extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'standbyexammeans';
     }
}
