<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 speakteachers-该视频讲课老师表的模型类 
* @property integer $id   
* @property integer $speakid   课程讲的ID
* @property integer $teacherid   老师id
* @property integer $ordernumber   排序数
*/
class Speakteachers extends \yii\db\ActiveRecord
{
      use SpeakteachersTrait;
     public static function tableName(){
         return 'speakteachers';
     }
}
