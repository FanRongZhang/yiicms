<?php
namespace common\models;

use Yii;

//class Bishi_quickly_shuati extends \yii\db\ActiveRecord

trait Bishi_quickly_shuatiTrait
{
    public function getQuestion(){
        return $this->hasOne(Bishi_question::className(),[
            'id' => 'question_id'
        ]);
    }
}
