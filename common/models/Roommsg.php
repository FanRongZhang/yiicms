<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 roommsg-聊天室消息，应用于了视频播放页面表的模型类 
* @property integer $id   
* @property string $roomid   房间id
* @property string $username   userid
* @property string $content   聊天内容
* @property datetime $createdate   聊天日期时间
*/
class Roommsg extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'roommsg';
     }
}
