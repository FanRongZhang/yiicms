<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 netcourseteacher-网课教师表的模型类 
* @property integer $id   
* @property integer $courseid   课程ID
* @property integer $teacherid   教师ID
* @property integer $sortid   排序ID，越大越靠前
* @property integer $created_at   
*/
class Netcourseteacher extends \yii\db\ActiveRecord
{
      use NetcourseteacherTrait;
     public static function tableName(){
         return 'netcourseteacher';
     }
}
