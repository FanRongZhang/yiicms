<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 tiku_timu-表的模型类 
* @property integer $id   
* @property integer $yuanID   原ID
* @property longtext $content   题干
* @property longtext $material   材料
* @property integer $typeid   类型
* @property integer $difficulty   难度
* @property integer $createdTime   创建时间
* @property string $shortSource   
* @property longtext $accessories   
* @property longtext $correctAnswer   
*/
class Tiku_timu extends \yii\db\ActiveRecord
{
      use Tiku_timuTrait;
     public static function tableName(){
         return 'tiku_timu';
     }
}
