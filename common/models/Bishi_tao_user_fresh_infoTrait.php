<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 bishi_tao_user_fresh_info-笔试刷题-套题(历年真题套题）刷题信息表的模型类 
* @property integer $id   
* @property integer $user_id   
* @property integer $tao_id   
* @property integer $start_time   
* @property integer $end_time   
* @property integer $is_finish   
*/
trait Bishi_tao_user_fresh_infoTrait
{

    public function getDetails(){
        return $this->hasMany(Bishi_tao_user_fresh_info_detail::className(),[
            'fresh_info_id' => 'id'
        ]);
    }
}
