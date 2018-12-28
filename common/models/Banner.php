<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 banner-表的模型类 
* @property integer $id   
* @property string $position   1:首页BANNER
* @property string $src   
* @property string $link   
* @property integer $order_desc   
* @property integer $is_online   
*/
class Banner extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'banner';
     }
}
