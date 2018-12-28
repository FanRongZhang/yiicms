<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 articlecategory-咨询[栏目]分类表的模型类 
* @property integer $id   
* @property integer $modelid   内容模型
* @property string $category   栏目英文或者拼音名称
* @property string $text   栏目中文名称
* @property integer $iscontentcategory   是否可以在该栏目下面添加咨询内容
* @property string $image   栏目形象图片
* @property string $description   栏目介绍，可以添加咨询内容的栏目应该放入描述
* @property integer $pid   上级栏目
* @property integer $enable   是否启用
* @property integer $ismenu   是否在导航显示
* @property integer $listorder   排序
* @property string $meta_title   栏目介绍，可以添加咨询内容的栏目应该放入描述
* @property string $meta_keywords   栏目介绍，可以添加咨询内容的栏目应该放入描述
* @property string $meta_description   栏目介绍，可以添加咨询内容的栏目应该放入描述
* @property string $template_index   栏目首页模版文件
* @property string $template_list   栏目内容列表模版文件
* @property string $template_conent_detail   栏目内容详细页模版文件
* @property integer $created_at   
* @property integer $updated_at   
* @property integer $istherehuizong   该资讯是否有汇总信息
*/
class Articlecategory extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'articlecategory';
     }
}
