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
class Netcourse_audio extends \yii\db\ActiveRecord
{
      use Netcourse_audioTrait;
     public static function tableName(){
         return 'netcourse_audio';
     }
}
