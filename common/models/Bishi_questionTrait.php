<?php
namespace common\models;

use Yii;


//class Bishi_question extends \yii\db\ActiveRecord

trait Bishi_questionTrait
{
    public function getExtendProperties(){
        return $this->hasMany(Bishi_question_extend_property::className(),[
            'question_id' => 'id'
        ]);
    }

    public function getAryxingcetype(){
        return $this->hasMany(Bishi_xingce_type::className(),[
            'id' => 'specific_id'
        ])->via('extendProperties');
    }

    public function getOptions(){
        return $this->hasMany(Bishi_question_option::className(),[
            'question_id' => 'id'
        ]);
    }

    public function getCailiao(){
        return $this->hasOne(Bishi_cailiao::className(),[
            'id' => 'cailiao_id'
        ]);
    }

    public function getFavoriteUsers(){
        return $this->hasMany(Bishi_favorite::className(),[
            'question_id' => 'id'
        ]);
    }
}
