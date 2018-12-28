<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 unkownwaycourse-未知/不定的授课方式表的模型类 
* @property integer $id   
* @property string $mingcheng   名称
* @property string $tese   特色
* @property float $xuefei   学费
* @property string $keshi   课时
* @property string $kaibanshijian   开班时间
* @property integer $needlogistic   
*/
class Unkownwaycourse extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'unkownwaycourse';
     }
}
