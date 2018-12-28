<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 tuangougroup-团购组，这里做个团购的ID标识和区分表的模型类 
* @property integer $id   
* @property integer $start_user_id   
* @property date $create_date   团创建的日期
* @property integer $kecheng_id   
*/
class Tuangougroup extends \yii\db\ActiveRecord
{
      use TuangougroupTrait;
     public static function tableName(){
         return 'tuangougroup';
     }
}
