<?php
namespace common\models\Field;

use common\models\Model;
use common\models\Modelfield;

/**
 * 字段值类型UI
 * @property string $name 数据类型英文名
 * @property string $nickname 字段业务中文名称
 * @property string $type 字段数据库类型
 * @property bool $showInList 是否显示在列表列里面
 * @property bool $allowIndex 是否允许建立索引
 * @property integer $minLength 字符长度默认最小值
 * @property integer $maxLength 字符长度默认最大值
 * @property bool $allowSearch 作为搜索条件
 * @property bool $allowFulltext 作为全站搜索信息
 * @property bool $allowIsunique 是否允许值唯一
 */
abstract class FieldValueType
{
    public $name = 'name';
    public $nickname = 'nickname';
    public $type = 'char(100)';
    public $showInList = true;
    public $allowIndex = true;
    public $minLength = 0;
    public $maxLength = 0;
    public $allowSearch = false;
    public $allowFulltext = false;
    public $allowIsunique = false;

    /**
     * 设置字段类型自己时候使用的UI
     * @param array $setting
     */
    public function settingUI($setting=[])
    {
        $aryUISetting = $setting;//写2个变量一样的，以免部分文件用的$setting 部分用的 $aryUISetting
        $_UIPath = __DIR__ . '/'.str_replace('common\\models\\Field\\','',get_called_class()).'/';
        if($setting){
            include $_UIPath . 'edit.php';
        }else{
            include $_UIPath . 'setting.php';
        }
    }

    /**
     * 呈现该数据类型的数据输入UI
     * @param Model $model
     * @param Modelfield $modelField
     * @param $aryUISetting 关于该数据类型的UI界面提供的参数设置（settingUI方法返回的设置UI）
     * @param string $value
     * @return string
     */
    public function display(Model $model,Modelfield $modelField,$aryUISetting , $value = ''){
        $setting = $aryUISetting;//写2个变量一样的，以免部分文件用的$setting 部分用的 $aryUISetting
        if(!$value && isset($setting['defaultvalue'])){
            $value = $setting['defaultvalue'];
        }
        $_UIPath = __DIR__ . '/'.str_replace('common\\models\\Field\\','',get_called_class()).'/';
        include $_UIPath . 'display.php';
    }

}