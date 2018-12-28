<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 column_video-表的模型类 
* @property integer $id   
* @property integer $column_id   
* @property string $title   
* @property string $detail   
* @property integer $is_free   是否免费
* @property float $price   价格
* @property string $videoid   视频播放地址
* @property string $coverimg   封面图
* @property integer $duration_time   时长
* @property datetime $create_time   
* @property integer $needlogistic   
* @property integer $is_sell   
* @property integer $end_time   结束时间
*/
class Column_video extends \yii\db\ActiveRecord
{
      use Column_videoTrait;
     public static function tableName(){
         return 'column_video';
     }
}
