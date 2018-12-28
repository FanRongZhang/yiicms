<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 tuangougroupuser-团购人员表的模型类 
* @property integer $id   
* @property integer $tuangou_id   
* @property integer $user_id   
*/
//class Tuangougroupuser extends \yii\db\ActiveRecord
trait TuangougroupuserTrait
{
    public function getUser(){
        return $this->hasOne(User::className(),[
            'id' => 'user_id'
        ]);
    }
}
