<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 netcoursestudent-网课学员表的模型类 
* @property integer $id   
* @property integer $courseid   课程ID
* @property integer $userid   教师ID
* @property integer $created_at   
*/
class Netcoursestudent extends \yii\db\ActiveRecord
{
      use NetcoursestudentTrait;
     public static function tableName(){
         return 'netcoursestudent';
     }
}
