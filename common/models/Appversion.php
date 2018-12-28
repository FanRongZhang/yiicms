<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 appversion-表的模型类 
* @property integer $id   
* @property integer $is_android   
* @property string $version   新版本
* @property string $download_url   app下载地址
* @property string $note   更新说明
* @property string $min_running_version   客户端最小运行版本
* @property integer $is_update_force   是否强制更新到新版本
* @property integer $is_up   是否启用
*/
class Appversion extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'appversion';
     }
}
