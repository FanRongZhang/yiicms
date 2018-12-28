<?php
namespace common\models\Field;

use app\services\FieldValueTypeService;

/**
 * 信息模版
 * @package common\models\Field
 */
class Informationtemplate extends FieldValueType{

    public function __construct()
    {
        $this->name = FieldValueTypeService::TYPE_INFORMATION_TEMPLATE;
        $this->nickname = '重要信息';
        $this->type = 'text';
        $this->showInList = false;
        $this->allowIndex = false;
        $this->minLength = 0;
        $this->maxLength = 50;
        $this->allowSearch = false;
        $this->allowFulltext = false;
        $this->allowIsunique = false;
    }

}