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
//extends \yii\db\ActiveRecord
Trait NetcoursestudentTrait
{
    /**
     * 得到用户
     * @return User
     */
    public function getUser(){
        return $this->hasOne(User::className(),[
            'id' => 'userid'
        ]);
    }
}
