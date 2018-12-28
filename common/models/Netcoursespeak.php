<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 netcoursespeak-讲表的模型类 
* @property integer $id   
* @property integer $nodeid   节ID
* @property integer $courseid   课程ID
* @property string $title   标题
* @property string $playurl   播放地址,阿里云的VIDEOID
* @property datetime $playdate   
* @property integer $islive   是否直播
* @property integer $iscream   是否精华
* @property integer $created_at   
* @property integer $isfree   
* @property string $live_stream_id   直播流标识，腾讯云
* @property integer $is_living_start   
* @property integer $is_living_end   
* @property integer $is_transcode   
* @property integer $is_complete   
* @property string $callback   
* @property integer $ordernumber   节点下面的课程排序数字，越小越靠前
*/
class Netcoursespeak extends \yii\db\ActiveRecord
{
      use NetcoursespeakTrait;
     public static function tableName(){
         return 'netcoursespeak';
     }
}
