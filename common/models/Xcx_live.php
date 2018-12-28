<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 xcx_live-表的模型类 
* @property integer $id   
* @property string $title   直播标题
* @property float $price   观看直播价格
* @property datetime $start_time   直播开始时间
* @property datetime $end_time   
* @property string $cover   直播封面
* @property integer $needlogistic   
* @property string $des   直播说明图文,APP内以H5进行展示
* @property string $custom_videoid_afterlive   直播结束后的自定义上传视频
* @property integer $is_online   上架
*/
class Xcx_live extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'xcx_live';
     }
}
