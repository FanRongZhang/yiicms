<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 huangjinzhuanlan-黄金专栏咨询信息表的模型类 
* @property integer $id   
* @property integer $category   1: 
* @property string $title   
* @property string $img   
* @property string $content   
* @property datetime $createtime_datetime   
* @property datetime $last_update_datetime   
* @property integer $order_number_desc   
* @property integer $isonline   
* @property integer $click   
*/
class Huangjinzhuanlan extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'huangjinzhuanlan';
     }
}
