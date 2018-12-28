<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 extotijiangonggao-体检公告表的模型类 
* @property integer $id   
* @property string $tablename   表名
* @property integer $tabledataid   tablename表里面的记录ID
* @property integer $examid   关联到的考试ID
* @property string $diquordanwei   地区或者部门
* @property string $mingdanurl   名单文件URL
* @property string $shijian   面试时间
* @property string $didian   面试地点
* @property string $url   
*/
class Extotijiangonggao extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'extotijiangonggao';
     }
}
