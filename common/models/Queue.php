<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 queue-表的模型类 
* @property integer $id   
* @property string $channel   
* @property blob $job   
* @property integer $pushed_at   
* @property integer $ttr   
* @property integer $delay   
* @property integer $priority   
* @property integer $reserved_at   
* @property integer $attempt   
* @property integer $done_at   
*/
class Queue extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'queue';
     }
}
