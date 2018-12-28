<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 noticecustomizecondition-公告资讯用户定制通知条件表的模型类 
* @property integer $id   
* @property integer $userid   用户编号
* @property string $examtype   考试类型
* @property integer $regionid   地方编号
* @property string $major   专业
* @property string $degree   学历
* @property date $birthdate   我的出生年月
* @property integer $enable   启用
* @property datetime $createtime   创建时间
*/
class Noticecustomizecondition extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'noticecustomizecondition';
     }
}
