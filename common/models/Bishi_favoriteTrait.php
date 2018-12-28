<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 bishi_favorite-收藏笔试问题表的模型类 
* @property integer $id   
* @property integer $question_id   
* @property integer $user_id   
*/
//class Bishi_favorite extends \yii\db\ActiveRecord

trait Bishi_favoriteTrait
{
    public function getQuestion(){
        return $this->hasOne(Bishi_question::className(),[
            'id' => 'question_id'
        ]);
    }
}
