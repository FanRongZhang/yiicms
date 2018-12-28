<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 shiyebian-表的模型类 
* @property integer $id   
* @property string $urlmd5   
* @property string $url   
* @property string $title   
* @property string $category   
* @property string $lastcategory   
* @property string $keywords   
* @property string $description   
* @property string $contenttitle   
* @property longtext $content   
* @property string $time   
* @property integer $createtime   
* @property integer $useit   
*/
class Shiyebian extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'shiyebian';
     }
}
