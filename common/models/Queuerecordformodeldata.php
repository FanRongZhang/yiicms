<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 queuerecordformodeldata-那些模型数据表里面的记录被推送到了队列里面表的模型类 
* @property integer $id   
* @property integer $modelid   模型ID
* @property integer $tabledataid   表记录ID
* @property string $msgid   放入队列时候返回消息ID
* @property string $status   该消息处理状态
* @property integer $pushtime   
* @property integer $handletime   
* @property integer $finishtime   
* @property datetime $createtime_datetime   
*/
class Queuerecordformodeldata extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'queuerecordformodeldata';
     }
}
