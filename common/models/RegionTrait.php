<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 region-地区表表的模型类 
* @property integer $code   
* @property integer $parentCode   
* @property integer $type   
* @property string $name   
* @property string $fullName   
* @property string $py   
*/
trait RegionTrait
{
     public function getCities(){
         return $this->hasMany(Region::className(),[
             'parentCode' => 'code'
         ]);
     }
}
