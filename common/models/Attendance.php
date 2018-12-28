<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 attendance-表的模型类 
* @property integer $id   
* @property integer $user_id   
* @property date $attendance_date   
* @property integer $continuous_sign   
* @property integer $had_awarded   
*/
class Attendance extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'attendance';
     }
}
