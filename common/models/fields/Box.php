<?php
namespace common\models\Field;

use app\services\FieldValueTypeService;
use common\models\Model;
use common\models\Modelfield;

/**
 * 选项
 * @package common\models\Field
 */
class Box extends FieldValueType{

    public function __construct()
    {
        $this->name = FieldValueTypeService::TYPE_BOX;
        $this->nickname = '选项';
        $this->type = 'char(50)';
        $this->showInList = true;
        $this->allowIndex = true;
        $this->minLength = 0;
        $this->maxLength = 50;
        $this->allowSearch = true;
        $this->allowFulltext = false;
        $this->allowIsunique = false;

    }

}