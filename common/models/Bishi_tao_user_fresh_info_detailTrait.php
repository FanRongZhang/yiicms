<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 bishi_tao_user_fresh_info_detail-用户套题刷题信息详情表的模型类 
* @property integer $id   
* @property integer $fresh_info_id   刷套题ID，bishi_tao_user_fresh_info的主键
* @property integer $user_id   
* @property integer $tao_id   
* @property integer $question_id   
* @property integer $is_right   
* @property integer $starttime   
* @property integer $endtime   
*/
trait Bishi_tao_user_fresh_info_detailTrait
{
     public function getQuestion(){
         return $this->hasOne(Bishi_question::className(),[
             'id' => 'question_id'
         ]);
     }
}
