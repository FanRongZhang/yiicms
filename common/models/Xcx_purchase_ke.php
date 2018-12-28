<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 xcx_purchase_ke-报班表的模型类 
* @property integer $id   
* @property string $title   
* @property float $price   
* @property integer $is_sell   是否上架  0未上架 1已上架
* @property integer $needlogistic   
* @property string $coverimg   
* @property integer $people_bought   已购买人数
* @property integer $desc_id   
* @property datetime $create_time   
* @property string $jiesao_img   介绍图片
* @property string $anpai_img   安排图片
* @property string $fenlei   
*/
class Xcx_purchase_ke extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'xcx_purchase_ke';
     }
}
