<?php
namespace app\services;

use yii\db\Exception;

/**
 * 表名和模型之间的服务
 * @package app\services
 */
class GenerateTableModelService{

    /**
     * 创建模型PHP文件
     * @param $tableName
     * @param bool $force
     * @return bool
     */
    public static function createModelFileByTableName($tableName , $force = false){

        $targetFile = dirname(__DIR__) . '/common/models/' . ucfirst($tableName) . '.php';

        if( ! $force) {
            if (file_exists($targetFile)) {
                return true;
            }
        }

        $dbName = ContentModelService::getDBName();
        $aryTables = \Yii::$app->db->createCommand('select table_name,table_comment from information_schema.tables where table_schema=\''.$dbName.'\' and table_name=\''.$tableName.'\'')->queryAll();
        foreach($aryTables as $oneTable) {
            $tableComment = $oneTable['table_comment'];

            $fileC = '<?php' . PHP_EOL;
            $fileC .= 'namespace common\models;' . PHP_EOL;
            $fileC .= PHP_EOL;
            $fileC .= 'use Yii;' . PHP_EOL;
            $fileC .= '/**' . PHP_EOL;
            $fileC .= '* 代码自动生成 ' . $tableName . '-' . $tableComment . '表的模型类 ' . PHP_EOL;

            $aryColoumns = \Yii::$app->db->createCommand('select COLUMN_NAME,DATA_TYPE,COLUMN_COMMENT,COLUMN_TYPE,CHARACTER_MAXIMUM_LENGTH,COLUMN_KEY from information_schema.`COLUMNS` where table_schema=\'' . $dbName . '\' and TABLE_NAME=\'' . $tableName . '\';')->queryAll();
            foreach ($aryColoumns as $oneColumn) {
                $fileC .= '* @property ' . $oneColumn['DATA_TYPE'] . ' $' . $oneColumn['COLUMN_NAME'] . '   ' . $oneColumn['COLUMN_COMMENT'] . PHP_EOL;
            }

            $fileC .= '*/' . PHP_EOL;
            $fileC .= 'class ' . ucfirst($tableName) . ' extends \yii\db\ActiveRecord' . PHP_EOL;
            $fileC .= '{' . PHP_EOL;


            $fileC .= '     public static function tableName(){' . PHP_EOL;
            $fileC .= "         return '$tableName';" . PHP_EOL;
            $fileC .= '     }' . PHP_EOL;

            $fileC .= '}' . PHP_EOL;

            file_put_contents($targetFile, $fileC);

            return true;
        }
        throw new Exception('表'.$tableName.'不存在');
    }

    /**
     * 返回该表的活动查询
     * @param $tableName
     * @return \yii\db\ActiveQuery
     */
    public static function getAQObjectByTableName($tableName){
        self::createModelFileByTableName($tableName);
        return \Yii::createObject('\\common\\models\\'.ucfirst($tableName));
    }

}