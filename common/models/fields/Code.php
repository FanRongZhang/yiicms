<?php
namespace common\models\Field;

use app\services\FieldValueTypeService;
use common\models\Model;
use common\models\Modelfield;

/**
 * 执行代码
 * @package common\models\Field
 */
class Code extends FieldValueType{
    public function __construct()
    {
        $this->name = FieldValueTypeService::TYPE_CODE;
        $this->nickname = '代码';
        $this->type = 'text';//存放执行代码
        $this->showInList = false;
        $this->allowIndex = false;
        $this->minLength = 0;
        $this->maxLength = 100;
        $this->allowSearch = false;
        $this->allowFulltext = false;
        $this->allowIsunique = false;
    }
}