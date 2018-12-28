<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 friendlylink-友情链接表的模型类 
* @property integer $id   
* @property string $name   
* @property string $link   link
* @property integer $enable   
* @property integer $starttime_int   显示该链接起始时间
* @property integer $endtime_int   显示该链接结束时间
* @property datetime $createtime_datetime   
* @property integer $examid   
* @property string $category   
* @property integer $ordernumber   
* @property integer $area   
* @property integer $examtype   
*/
class Friendlylink extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'friendlylink';
     }
}
