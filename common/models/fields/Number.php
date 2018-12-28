<?php
namespace common\models\Field;

use app\services\FieldValueTypeService;
use common\models\Model;
use common\models\Modelfield;

/**
 * 数字
 * @package common\models\Field
 */
class Number extends FieldValueType{

    public function __construct()
    {
        $this->name = FieldValueTypeService::TYPE_NUMBER;
        $this->nickname = '数字';
        $this->type = 'decimal(11,2)';
        $this->showInList = true;
        $this->allowIndex = true;
        $this->minLength = 0;
        $this->maxLength = 50;
        $this->allowSearch = false;
        $this->allowFulltext = false;
        $this->allowIsunique = false;
    }

}