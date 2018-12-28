<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 fakevoduser-给视频播放的僵尸用户表的模型类 
* @property integer $id   
* @property integer $userid   
* @property string $username   用户名称
* @property string $client_id   
* @property string $useravatar   
* @property integer $roomid   房间号 
* @property integer $starthour   
* @property integer $endhour   
*/
class Fakevoduser extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'fakevoduser';
     }
}
