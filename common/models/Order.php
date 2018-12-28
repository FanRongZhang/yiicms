<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 order-订单表的模型类 
* @property integer $id   
* @property integer $userid   会员id
* @property string $ordernum   订单号
* @property float $goods_amount   商品金额
* @property float $jifen_amount   
* @property string $consignee   收件人
* @property float $shipping_fee   运费
* @property float $orderfee   订单金额
* @property integer $is_pay   是否支付
* @property integer $pay_time   支付时间
* @property integer $shipping_status   运送状态
* @property integer $province   省
* @property integer $city   市
* @property integer $country   县
* @property string $adress   详细地址
* @property string $user_note   用户写的备注信息
* @property string $system_note   系统写的备注信息
* @property integer $is_deleted   是否删除
* @property integer $is_unnormal   是否异常
* @property integer $created_at   下单时间
* @property string $payway   
* @property integer $ispayonline   
* @property integer $needlogistic   
* @property string $payordersn   
* @property integer $tuangouid   团购ID,表 tuangougroup 的标识ID，值为0表示不是团购
* @property integer $refund_status   退款状态 0未退 1已退
*/
class Order extends \yii\db\ActiveRecord
{
      use OrderTrait;
     public static function tableName(){
         return 'order';
     }
}
