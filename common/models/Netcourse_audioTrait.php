<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 netcourse_audio-表的模型类 
* @property integer $id   
* @property string $title   
* @property string $audio_src   
* @property integer $teacher   
* @property float $price   
* @property datetime $create_time   
* @property integer $desc_id   
* @property integer $needlogistic   
* @property integer $duration   时长
* @property string $coverimg   课程封面
* @property string $detail   
* @property integer $column_id   
* @property integer $end_time   结束时间
* @property integer $is_sell   
* @property integer $kecheng_id   所属课程id
*/
trait Netcourse_audioTrait
{
    public function getColumn()
    {
        return $this->hasOne(Column_introduce::className(),['id'=>'column_id']);
    }


    public function getTeachersInfo(){
        return $this->hasOne(Teacher::className(),[
            'id' => 'teacher'
        ]);
    }
}