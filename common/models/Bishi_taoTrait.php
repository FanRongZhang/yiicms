<?php
namespace common\models;


trait Bishi_taoTrait
{
    public function getDiyu(){
        return $this->hasOne(Xcx_diyu_option::className(),[
            'diyuid' => 'id'
        ]);
    }

    public function getAryInfo(){
        return $this->hasMany(Bishi_tao_user_fresh_info::className(),[
            'tao_id' => 'id'
        ]);
    }
}
