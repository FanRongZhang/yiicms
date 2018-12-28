<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 edusubject-学科类别表的模型类 
* @property integer $id   
* @property string $subject   学科名称
*/
class Edusubject extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'edusubject';
     }
}
