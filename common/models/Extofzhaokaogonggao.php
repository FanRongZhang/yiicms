<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 extofzhaokaogonggao-招考公告表的模型类 
* @property integer $id   
* @property string $tablename   表名
* @property integer $tabledataid   tablename表里面的记录ID
* @property integer $examid   关联到的考试ID
* @property string $zhaoludiquordanwei   招录地区或单位
* @property string $renshu   人数
* @property string $zhiweibiaourl   上传的职位表EXCEL地址
* @property string $url   
*/
class Extofzhaokaogonggao extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'extofzhaokaogonggao';
     }
}
