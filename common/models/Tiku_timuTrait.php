<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 signtable-表的模型类 
* @property integer $id   
* @property string $signinfo   登记信息
* @property datetime $createtime_datetime   
* @property string $note   备注
* @property string $ip   
*/
//class Tiku_timu extends \yii\db\ActiveRecord
trait Tiku_timuTrait
{
     public function getType(){
     	return $this->hasOne(Tiku_type::className(),[
     			'id' => 'typeid'
     		]);
     }
}
