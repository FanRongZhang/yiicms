<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 bishi_zhuanxiang_shuati-笔试专项（题目内容分类）刷题表的模型类 
* @property integer $id   
* @property integer $user_id   
* @property integer $bigtype   大的题目分类ID  比如言语理解
* @property integer $question_id   
* @property integer $is_answered   
* @property integer $is_answer_right   
* @property integer $take_time_sec   
*/
trait Bishi_zhuanxiang_shuatiTrait
{
     public function getQuestion(){
         return $this->hasOne(Bishi_question::className(),[
             'id' => 'question_id'
         ]);
     }
}
