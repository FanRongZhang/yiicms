<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 jifenrecord-表的模型类 
* @property integer $id   
* @property integer $user_id   
* @property float $jifen   +-积分
* @property string $msg   
* @property datetime $create_datetime   
*/
class Jifenrecord extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'jifenrecord';
     }
}
