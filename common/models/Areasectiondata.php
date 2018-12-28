<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 areasectiondata-地方区域数据表的模型类 
* @property integer $id   
* @property integer $sectionid   区域
* @property integer $areaid   地区
*/
class Areasectiondata extends \yii\db\ActiveRecord
{
      use AreasectiondataTrait;
     public static function tableName(){
         return 'areasectiondata';
     }
}
