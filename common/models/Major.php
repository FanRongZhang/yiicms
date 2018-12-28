<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 major-专业表的模型类 
* @property integer $id   
* @property integer $subjectid   学科id
* @property integer $qualification_level   1:专科 2：本科 3：研究生
* @property string $name   专业名称
*/
class Major extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'major';
     }
}
