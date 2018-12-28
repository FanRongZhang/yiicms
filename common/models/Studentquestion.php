<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 studentquestion-学员问题表的模型类 
* @property integer $id   
* @property integer $userid   用户ID
* @property string $question   问题
* @property integer $category   问题分类
* @property string $answer   回答
* @property integer $hadhandled   是否已处理
* @property integer $isshow   是否显示在前台
* @property integer $created_at   
*/
class Studentquestion extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'studentquestion';
     }
}
