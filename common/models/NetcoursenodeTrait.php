<?php
namespace common\models;

use Yii;

//class Netcoursenode extends \yii\db\ActiveRecord
trait NetcoursenodeTrait
{
    public function getSpeaks(){
        return $this->hasMany(Netcoursespeak::className(),[
            'nodeid' => 'id'
        ]);
    }
}
