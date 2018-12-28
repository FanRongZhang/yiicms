<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 speakdownfiles-视频下的文件资料表的模型类 
* @property integer $id   
* @property integer $speakid   课程讲的ID
* @property string $filename   名称
* @property float $price   价格
* @property integer $ordernumber   排序数
* @property integer $createtime   创建时间
* @property string $src   
*/
class Speakdownfiles extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'speakdownfiles';
     }
}
