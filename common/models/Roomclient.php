<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 roomclient-用作SOCKET通信的房间用户记录表的模型类 
* @property integer $id   
* @property string $socket_room_name   房间名称,其实是通信分组
* @property string $client_id   通信ID
* @property integer $online   用户在线
* @property integer $is_banspeak   被禁言
* @property integer $userid   用户编号 
* @property string $username   用户名或者昵称(APP&小程序里面使用昵称)
* @property string $useravatar   用户头像
* @property datetime $createdate   创建时间(也是首次进入房间的时间)
* @property datetime $leavedate   上次离开时间
*/
class Roomclient extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'roomclient';
     }
}
