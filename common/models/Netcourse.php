<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 netcourse-网络课程表的模型类 
* @property integer $id   
* @property string $title   课程标题
* @property string $subtitle   
* @property string $coverimg   
* @property string $jiesao_img   
* @property datetime $starttime   开始日期
* @property datetime $endtime   结束日期
* @property float $price   售价
* @property integer $enable_promote   是否启用优惠
* @property float $promote_price   优惠价
* @property integer $promote_start_time   优惠开始时间
* @property integer $promote_end_time   优惠结束时间
* @property integer $number   已报名人数
* @property integer $includerecordvideo   包含录播
* @property integer $includelivevideo   包含直播
* @property integer $includeresource   包含资料
* @property integer $includetryitout   包含试听
* @property integer $includefree   包含免费课程
* @property integer $saleamount   销量
* @property string $des   课程介绍
* @property integer $isonline   是否上线该课程
* @property integer $created_at   
* @property integer $needlogistic   
*/
class Netcourse extends \yii\db\ActiveRecord
{
      use NetcourseTrait;
     public static function tableName(){
         return 'netcourse';
     }
}
