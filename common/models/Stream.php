<?php
namespace common\models;

use Yii;
/**
* 代码自动生成 stream-表的模型类 
* @property integer $id   
* @property string $stream_id   
* @property string $table_name   
* @property string $table_pk_id_value   
* @property integer $status_int   (1)推流 (0)断流（100）新录制文件（200）新截图文件
* @property longtext $info100_ary   
* @property integer $info100_count   
* @property datetime $last_update_time   
*/
class Stream extends \yii\db\ActiveRecord
{
     public static function tableName(){
         return 'stream';
     }
}
