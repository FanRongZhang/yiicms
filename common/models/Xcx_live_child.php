<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 xcx_live_child-XCX_LIVE下面的直播安排（当XCX_LIVE是一个直播集合的时候）表的模型类 
* @property integer $id   
* @property integer $live_id   xcx_live表ID
* @property string $title   直播的标题
* @property datetime $livetime   直播安排时间
* @property integer $is_free   是否免费观看
* @property string $stream_id   直播流ID
* @property string $custom_videoid_afterlive   直播结束后的自定义上传视频
* @property integer $is_start   
* @property integer $is_end   
*/
class Xcx_live_child extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'xcx_live_child';
     }
}
