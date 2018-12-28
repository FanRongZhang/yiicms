<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 right_img-右边栏图片表的模型类 
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
* @property string $path   上传图片
* @property string $url   链接地址
* @property float $order   排序
* @property string $examtype   考试类型
*/
class Right_img extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'right_img';
     }
}
