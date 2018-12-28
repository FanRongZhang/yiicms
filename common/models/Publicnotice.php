<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 publicnotice-公告表的模型类 
* @property integer $id   
* @property integer $category   咨询分类id
* @property integer $created_at   
* @property integer $updated_at   
* @property integer $is_public   是否在前台站点公开
* @property integer $is_deleted   是否已被删除
* @property string $title   
* @property string $tag   
* @property string $keywords   
* @property string $description   
* @property string $summary   内容摘要
* @property longtext $content   内容
* @property string $importantinfo   重要信息
* @property integer $area   公告地区
* @property datetime $time   资讯时间
* @property integer $sync   同步到elasticsearch的时间
* @property integer $examid   
* @property integer $click   
* @property string $thumb   缩略图
* @property string $recommend   是否推荐到首页
* @property string $categoryrecommend   是否推荐到分类新闻
* @property integer $editor   
*/
class Publicnotice extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'publicnotice';
     }
}
