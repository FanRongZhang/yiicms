<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 cart-购物车表的模型类 
* @property integer $id   
* @property integer $userid   用户编号
* @property string $goodstype   商品类型
* @property integer $goodsid   商品编号
* @property float $price   价格
* @property float $jifen   
* @property integer $num   数量
* @property integer $created_at   
* @property string $name   
* @property string $img   
*/
class Cart extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'cart';
     }
}
