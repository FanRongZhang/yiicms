<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 hotsearchkey-搜素热词表的模型类 
* @property integer $id   
* @property string $word   热词
* @property integer $order   排序数
* @property integer $enable   启用
* @property integer $starttime   显示时间-开始时间
* @property integer $endtime   显示时间-结束时间
* @property datetime $createtime   创建日期Y-m-d H:i:s
*/
class Hotsearchkey extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'hotsearchkey';
     }
}
