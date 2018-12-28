<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 favoritecourse-表的模型类 
* @property integer $id   
* @property integer $userid   USER ID
* @property integer $courseid   课程ID
*/
//class Favoritecourse extends \yii\db\ActiveRecord
trait FavoritecourseTrait
{
    public function getCourse(){
        return $this->hasOne(Netcourse::className(),[
            'id' => 'courseid'
        ]);
    }
}
