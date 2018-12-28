<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 column_introduce-表的模型类 
* @property integer $id   
* @property string $title   专栏标题
* @property integer $teacher_id   主讲教师
* @property string $column_introduce   栏目介绍
*/
class Column_introduce extends \yii\db\ActiveRecord
{
      use Column_introduceTrait;
     public static function tableName(){
         return 'column_introduce';
     }
}
