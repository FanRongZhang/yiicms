<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 extofniluyonggongshi-拟录用公示表的模型类 
* @property integer $id   
* @property string $tablename   表名
* @property integer $tabledataid   tablename表里面的记录ID
* @property integer $examid   关联到的考试ID
* @property string $diquordanwei   地区或者部门
* @property string $shijian   公示时间
* @property string $url   
*/
class Extofniluyonggongshi extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'extofniluyonggongshi';
     }
}
