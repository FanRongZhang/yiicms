<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 pagecache-网页地址缓存表的模型类 
* @property integer $id   
* @property string $md5url   
* @property string $rawurl   
* @property string $htmlcode   
* @property integer $expire   
*/
class Pagecache extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'pagecache';
     }
}
