<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 teacher-教师表的模型类 
* @property integer $id   
* @property string $name   课程ID
* @property integer $enable   启用
* @property integer $sex   性别
* @property string $img   头像
* @property string $instruction   介绍
* @property integer $sortid   排序ID，越大越靠前
* @property integer $created_at   
* @property float $haopinglv   
* @property integer $kechengshu   
* @property integer $xueshengshu   
* @property string $petname   昵称
* @property string $personality_sign   个性签名
* @property string $label   标签
*/
class Teacher extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'teacher';
     }
}
