<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 recommentpool-资讯推荐池表的模型类 
* @property integer $id   
* @property integer $articleid   
* @property integer $examid   考试编号
* @property integer $category   资讯类型
* @property integer $area   
* @property datetime $time   资讯时间
* @property datetime $createtime_datetime   
*/
class Recommentpool extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'recommentpool';
     }
}
