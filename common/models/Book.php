<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 book-售卖的读书表的模型类 
* @property integer $id   
* @property string $name   名称
* @property float $price   价格
* @property float $jifen   该商品的兑换积分，0表示通过价格进行换算
* @property string $coverimg   封面图
* @property string $summary   列表描述
* @property string $description   介绍
* @property string $author   作者
* @property string $publisher   出版
* @property date $publishtime   出版时间
* @property string $wordnumber   字数
* @property string $binding   装帧
* @property string $kaiben   开本
* @property string $detail   读书详情
* @property integer $type   类别：1、实体书，2、电子书，3、音频资料
* @property integer $isonline   上架状态
* @property integer $ordernumber   排序数
* @property string $resource_package   资源包
* @property integer $needlogistic   
* @property integer $createtime   创建时间
*/
class Book extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'book';
     }
}
