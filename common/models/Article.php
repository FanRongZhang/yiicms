<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 article-公告表的模型类 
* @property integer $id   
* @property integer $examtypeid   咨询分类id
* @property integer $categoryid   
* @property integer $created_at   
* @property integer $updated_at   
* @property integer $is_public   是否在前台站点公开
* @property integer $is_deleted   是否已被删除
* @property string $title   
* @property string $tag   
* @property string $summary   内容摘要
* @property longtext $content   内容
* @property datetime $time   资讯时间
* @property integer $click   
* @property integer $is_in_index   是否在首页展示
*/
class Article extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'article';
     }
}
