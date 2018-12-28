<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 sitesetting-网站信息设置表的模型类 
* @property integer $id   
* @property string $name   设置的名称
* @property string $content   设置的内容
* @property integer $created_at   
* @property integer $updated_at   
*/
class Sitesetting extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'sitesetting';
     }
}
