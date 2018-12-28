<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 noticechengjipushrecord-表的模型类 
* @property integer $id   
* @property integer $userid   接受用户
* @property string $openid   微信的OPENID
* @property integer $modelid   
* @property integer $tabledataid   
* @property string $title   推送资讯标题,冗余字段
* @property integer $examid   考试ID
* @property string $zhunkaozheng   准考证号
* @property string $remark   其他信息备注
* @property integer $createtime   创建时间int
*/
class Noticechengjipushrecord extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'noticechengjipushrecord';
     }
}
