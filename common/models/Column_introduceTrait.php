<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 column_introduce-表的模型类 
* @property integer $id   
* @property string $teacher_introduce   
* @property string $column_introduce   
*/
trait Column_introduceTrait{

     public function getTeacher()
     {
         return $this->hasOne(Teacher::className(),['id' => 'teacher_id']);
     }
}
