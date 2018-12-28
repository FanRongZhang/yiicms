<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 noticechengjicondition-考试成绩定制表的模型类 
* @property integer $id   
* @property integer $examid   考试ID
* @property string $zhunkaozhenghao   准考证号
* @property string $name   姓名
* @property integer $enable   是否启用
* @property datetime $createtime   创建时间datetime
* @property integer $userid   定制的用户ID
*/
class Noticechengjicondition extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'noticechengjicondition';
     }
}
