<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 rolerights-角色权利表的模型类 
* @property integer $id   
* @property integer $roleid   
* @property integer $accessid   
* @property integer $created_at   
* @property integer $updated_at   
*/
class Rolerights extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'rolerights';
     }
}
