<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 xcx_fenda_question-表的模型类 
* @property integer $id   
* @property string $title   
* @property integer $question_type   问题分类
* @property float $award   奖励积分
* @property integer $teacher_id   指定老师
* @property integer $is_done   
* @property integer $best_answer_id   被采纳的回答ID
*/
//class Xcx_fenda_question extends \yii\db\ActiveRecord
trait Xcx_fenda_questionTatri{

    public function getUser()
    {
        return $this->hasOne(User::className(),['user_id'=>'id']);
    }
}