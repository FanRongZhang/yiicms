<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 extofmianshigonggao-面试公告表的模型类 
* @property integer $id   
* @property string $tablename   表名
* @property integer $tabledataid   tablename表里面的记录ID
* @property integer $examid   关联到的考试ID
* @property string $zhaoludiquordanwei   招考地区或者部门
* @property string $mingdanurl   面试名单文件URL
* @property string $mianshishijian   面试时间
* @property string $mianshididian   面试地点
* @property string $url   
*/
class Extofmianshigonggao extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'extofmianshigonggao';
     }
}
