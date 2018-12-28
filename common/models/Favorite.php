<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 favorite-用户最爱的收藏网址信息表的模型类 
* @property integer $id   
* @property integer $userid   用户ID
* @property string $url   网址
* @property string $title   标题
* @property integer $created_at   
*/
class Favorite extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'favorite';
     }
}
