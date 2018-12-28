<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 access-表的模型类 
* @property integer $id   
* @property string $controller   控制器名称
* @property string $method   执行的方法名称
* @property string $url   网址,比如写 user/reg  /user/reg  reg 三种都可以
* @property string $des   该访问的说明
* @property integer $pid   父id
* @property integer $created_at   
* @property integer $updated_at   
*/
class Access extends \yii\db\ActiveRecord
{
      use AccessTrait;
     public static function tableName(){
         return 'access';
     }
}
