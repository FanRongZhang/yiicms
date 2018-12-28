<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 modelfield-模型字段记录表表的模型类 
* @property integer $id   
* @property integer $modelid   
* @property string $fieldvaluetype   字段表单类型
* @property string $field   字段数据库列名
* @property string $name   字段网页名称
* @property string $tips   字段提示,显示在字段别名下方作为表单输入提示
* @property string $setting   表单部分外观设置
* @property string $css   表单的CSS样式名
* @property integer $minlength   字段取值范围
* @property integer $maxlength   字段取值范围，0表示无限制
* @property string $pattern   正则表达式，表单提交校验数据合法性
* @property string $errortips   数据校验未通过的提示信息
* @property string $formattribute   自定义表单属性,比如onclick=的JS脚本
* @property string $unsetroleids   禁止设置字段值的角色
* @property integer $isshowinlist   是否在列表中显示该列
* @property integer $isunique   是否值唯一
* @property integer $isbase   是否基本信息
* @property integer $issearch   是否作为搜索字段
* @property integer $issearchinlikestyle   是否模糊查询
* @property integer $isfulltext   是否应用该值进行全站搜索
* @property integer $isposition   在推荐位标签中调用
* @property integer $listorder   排序
* @property integer $canempty   
*/
class Modelfield extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'modelfield';
     }
}
