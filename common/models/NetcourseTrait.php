<?php
namespace common\models;

use Yii;

//class NetcourseTrait extends \yii\db\ActiveRecord
trait NetcourseTrait
{
    /**
     * 有很多学生
     * @return Netcoursestudent[]
     */
    public function getStudents($limit=0){
        $query = $this->hasMany(Netcoursestudent::className(),[
            'courseid' => 'id'
        ]);
        if($limit>0){
            $query = $query->limit($limit);
        }
        return $query;
    }

    /**
     * 有很多教师
     * @return Netcourseteacher[]
     */
    public function getTeachers(){
        return $this->hasMany(Netcourseteacher::className(),[
            'courseid' => 'id'
        ]);
    }


    public function getTeachersInfo(){
        return $this->hasMany(Teacher::className(),[
            'id' => 'teacherid'
        ])->via('teachers');
    }

    /**
     * 有很多章节课程
     * @return Netcoursenode[]
     */
    public function getNodes(){
        return $this->hasMany(Netcoursenode::className(),[
            'courseid' => 'id'
        ]);
    }
}
