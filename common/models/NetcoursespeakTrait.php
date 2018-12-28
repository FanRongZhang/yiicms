<?php
namespace common\models;

use Yii;

trait NetcoursespeakTrait
{
    public function getTeachers()
    {
        return $this->hasMany(Speakteachers::className(),[
            'speakid' => 'id'
        ]);
    }


    public function getFiles()
    {
        return $this->hasMany(Speakdownfiles::className(),[
            'speakid' => 'id'
        ]);
    }
}
