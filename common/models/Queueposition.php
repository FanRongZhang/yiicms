<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 queueposition-职位表导入队列记录表的模型类 
* @property integer $id   
* @property integer $examid   考试ID
* @property string $excel_url   excel临时地址
* @property string $msgid   放入队列时候返回消息ID
* @property string $status   该消息处理状态
* @property integer $pushtime   
* @property integer $handletime   
* @property integer $finishtime   
* @property datetime $createtime   
*/
class Queueposition extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'queueposition';
     }
}
