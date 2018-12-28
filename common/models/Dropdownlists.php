<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 dropdownlists-下拉列表表的模型类 
* @property integer $id   
* @property string $name   下拉列表名称
*/
class Dropdownlists extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'dropdownlists';
     }
}
