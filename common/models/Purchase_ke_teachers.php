<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 purchase_ke_teachers-表的模型类 
* @property integer $id   
* @property integer $teacherid   
* @property integer $ke_id   
*/
class Purchase_ke_teachers extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'purchase_ke_teachers';
     }
}
