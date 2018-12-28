<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 master_level-表的模型类 
* @property integer $id   
* @property string $name   
* @property integer $pointer   
* @property string $img   等级头像
*/
class Master_level extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'master_level';
     }
}
