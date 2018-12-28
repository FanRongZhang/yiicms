<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 areasection-地方区域表的模型类 
* @property integer $id   
* @property string $section   区域
*/
//trait AreasectionTrait extends \yii\db\ActiveRecord
trait AreasectionTrait
{
    public function getSections(){
        return $this->hasMany(Areasectiondata::className(),[
            'sectionid' => 'id'
        ]);
    }
}
