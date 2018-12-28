<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 articletype-考试类别表的模型类 
* @property integer $id   
* @property string $name   类别名称
* @property integer $ordernum   
*/
class Articletype extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'articletype';
     }
}
