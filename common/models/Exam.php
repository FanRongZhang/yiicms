<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 exam-考试基本信息表的模型类 
* @property integer $id   
* @property string $name   考试名称
* @property integer $examtype   考试类型
* @property integer $year   年份
* @property string $img   缩略图
* @property integer $area   地区
* @property string $timeline   时间线
* @property string $sorx   上半年或下半年
* @property integer $is_deleted   是否删除
* @property integer $created_at   创建时间
* @property integer $updated_at   修改时间
*/
class Exam extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'exam';
     }
}
