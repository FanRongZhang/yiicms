<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 testresult-考试成绩表的模型类 
* @property integer $id   
* @property integer $examid   考试ID
* @property integer $linkarticle_modelid   关联的模型ID
* @property integer $linkarticle_tabledataid   关联的数据表ID
* @property integer $had_pushed   是否已经推送给用户了
* @property string $zhunkaozhenghao   准考证号
*/
class Testresult extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'testresult';
     }
}
