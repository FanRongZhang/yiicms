<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 extofzhigefushen-资格复审表的模型类 
* @property integer $id   
* @property string $tablename   表名
* @property integer $tabledataid   tablename表里面的记录ID
* @property integer $examid   关联到的考试ID
* @property string $zhaokaobumen   所属的招考部门
* @property string $mingdanurl   名单文件URL
* @property string $url   
*/
class Extofzhigefushen extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'extofzhigefushen';
     }
}
