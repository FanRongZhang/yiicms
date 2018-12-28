<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 model-内容模型表表的模型类 
* @property integer $id   
* @property string $name   模型名称
* @property string $tablename   数据库存储表名
* @property integer $enablearticlefulltextsearch   是否启用咨询全文搜索
* @property string $description   描述
* @property integer $disabled   是否启用该模型
* @property string $list_template   列表视图文件
* @property string $detail_template   详细视图文件
* @property integer $create_at   创建时间
* @property integer $update_at   最后更新时间
*/
class Model extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'model';
     }
}
