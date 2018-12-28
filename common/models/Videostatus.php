<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 videostatus-表的模型类 
* @property integer $id   
* @property string $videoid   
* @property integer $is_complete   
* @property datetime $complete_time   
* @property integer $is_transcode   
* @property datetime $transcode_time   
*/
class Videostatus extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'videostatus';
     }
}
