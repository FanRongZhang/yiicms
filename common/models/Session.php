<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 session-表的模型类 
* @property string $id   
* @property integer $expire   
* @property blob $data   
*/
class Session extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'session';
     }
}
