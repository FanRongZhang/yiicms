<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 areasection-地方区域表的模型类 
* @property integer $id   
* @property string $section   区域
*/
class Areasection extends \yii\db\ActiveRecord
{
      use AreasectionTrait;
     public static function tableName(){
         return 'areasection';
     }
}
