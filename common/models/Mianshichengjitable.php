<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 mianshichengjitable-成绩表格表的模型类 
* @property integer $id   
* @property integer $examid   关联到的考试ID
* @property string $diquordanwei   地区或者单位名称
* @property string $diquordanweilink   地区或者单位名称链接
* @property string $zonghechengjilink   综合成绩链接
* @property string $mianshichengjilink   面试成绩链接
* @property integer $ordernumber   排序数字，越大越前
* @property integer $lastupdatetime   最后一次更新时间
* @property string $groupname   
* @property string $updatestatus   
*/
class Mianshichengjitable extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'mianshichengjitable';
     }
}
