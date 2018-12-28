<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 address-收货地址表的模型类 
* @property integer $id   
* @property integer $useid   用户id
* @property string $detailaddr   详细地址
* @property string $name   收货人姓名
* @property string $tel   联系电话
* @property integer $province   省
* @property integer $city   市
* @property integer $district   区
* @property integer $isdefault   是否设为默认地址
* @property integer $created_at   
* @property integer $updated_at   
*/
class Address extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'address';
     }
}
