<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 tuangougroupuser-团购人员表的模型类 
* @property integer $id   
* @property integer $tuangou_id   
* @property integer $user_id   
*/
class Tuangougroupuser extends \yii\db\ActiveRecord
{
      use TuangougroupuserTrait;
     public static function tableName(){
         return 'tuangougroupuser';
     }
}
