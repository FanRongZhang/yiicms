<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 employ-招聘信息表的模型类 
* @property integer $id   
* @property string $title   
* @property integer $category   咨询分类id
* @property integer $section   板块id
* @property integer $area   地区ID
* @property integer $examid   考试id
* @property integer $click   点击次数
* @property integer $created_at   创建时间
* @property integer $updated_at   最后一次编辑时间
* @property integer $is_public   是否在前台站点公开
* @property integer $is_deleted   是否已被删除
* @property string $describe   简单描述
* @property string $content   具体要求
* @property float $order   排序
*/
class Employ extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'employ';
     }
}
