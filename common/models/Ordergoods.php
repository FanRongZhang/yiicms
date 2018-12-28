<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 ordergoods-订单物品表的模型类 
* @property integer $id   
* @property integer $goodid   物品编号
* @property integer $created_at   创建时间
* @property integer $updated_at   更新时间
* @property string $goodstype   
* @property float $price   
* @property integer $num   
* @property string $ordernum   
* @property integer $userid   
*/
class Ordergoods extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'ordergoods';
     }
}
