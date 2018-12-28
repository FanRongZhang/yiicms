<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 usermsg-表的模型类 
* @property integer $id   
* @property integer $user_id   
* @property string $msg   
* @property integer $is_read   
* @property datetime $create_datetime   
*/
class Usermsg extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'usermsg';
     }
}
