<?php
namespace common\models;

use Yii;

trait NetcourseteacherTrait
{
     public function getTeacher(){
         return $this->hasOne(Teacher::className(),[
             'id' => 'teacherid'
         ]);
     }
}
