<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 tiku_type-表的模型类 
* @property integer $id   
* @property string $typename   
* @property integer $pid   
*/
class Tiku_type extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'tiku_type';
     }
}
