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
trait SpeakteachersTrait
{
    public function getTeacher(){
        return $this->hasOne(Teacher::className(),[
            'id' => 'teacherid'
        ]);
    }
}
