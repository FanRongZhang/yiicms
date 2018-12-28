<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 netcoursenode-课程章节表的模型类 
* @property integer $id   
* @property integer $courseid   课程ID
* @property string $title   标题
* @property integer $iscream   是否精华
* @property integer $created_at   
*/
class Netcoursenode extends \yii\db\ActiveRecord
{
      use NetcoursenodeTrait;
     public static function tableName(){
         return 'netcoursenode';
     }
}
