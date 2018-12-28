<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 dropdownlistitems-下拉列表表的模型类 
* @property integer $id   
* @property integer $dropdownlistid   下拉列表的ID
* @property string $value   列表项的数据
* @property integer $pid   隶属上级ID
* @property integer $enable   是否启用该项，默认启用
*/
class Dropdownlistitems extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'dropdownlistitems';
     }
}
