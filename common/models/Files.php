<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 files-表的模型类 
* @property integer $id   
* @property string $name   名称
* @property string $link   链接
* @property integer $click   
* @property integer $enable   启用
* @property datetime $createtime   创建时间datetime
* @property integer $examid   属于哪个考试
* @property integer $downloadrequirelevel   0:免费1:注册用户2:vip用户
* @property string $des   描述
* @property integer $ordernumber   排序数字
*/
class Files extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'files';
     }
}
