<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 adposition-广告位置表的模型类 
* @property integer $id   
* @property integer $name   名称
* @property integer $w   宽
* @property integer $h   高
* @property integer $created_at   
*/
class Adposition extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'adposition';
     }
}
