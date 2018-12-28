<?php
namespace common\models;

use Yii;

trait AccessTrait
{

     public function getRolerights(){
         return $this->hasOne(Rolerights::className(),['accessid'=>'id']);
     }

}
