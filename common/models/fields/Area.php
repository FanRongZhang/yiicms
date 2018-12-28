<?php
namespace common\models\Field;

use app\services\FieldValueTypeService;
use common\models\Model;
use common\models\Modelfield;

/**
 * 地区
 * @package common\models\Field
 */
class Area extends FieldValueType{
    public function __construct()
    {
        $this->name = FieldValueTypeService::TYPE_AREA;
        $this->nickname = '地区';
        $this->type = 'int';
        $this->showInList = true;
        $this->allowIndex = true;
        $this->minLength = 0;
        $this->maxLength = 30;
        $this->allowSearch = true;
        $this->allowFulltext = false;
        $this->allowIsunique = false;
    }
}