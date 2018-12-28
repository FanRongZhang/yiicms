<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 sitead-广告位置表的模型类 
* @property integer $id   
* @property integer $positionid   广告位置
* @property string $img   图片地址
* @property string $text   文字
* @property integer $sortnumber   排序数字
* @property integer $enable   启用
* @property integer $created_at   
*/
class Sitead extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'sitead';
     }
}
