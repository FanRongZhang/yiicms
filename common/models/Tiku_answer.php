<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 tiku_answer-表的模型类 
* @property integer $id   
* @property integer $yuanid   原ID
* @property string $solution   答案
* @property string $source   题目来源
* @property string $kcnl   考察能力
* @property string $stzd   审题重点
* @property string $swdt   思维导图
* @property string $sfdt   示范答题
* @property string $sdjd   深度解读
* @property string $tzys   拓展延伸
* @property string $xgzt   相关真题
* @property integer $typeid   类别
* @property string $content   题干
* @property string $material   材料
*/
class Tiku_answer extends \yii\db\ActiveRecord
{
      use Tiku_answerTrait;
     public static function tableName(){
         return 'tiku_answer';
     }
}
