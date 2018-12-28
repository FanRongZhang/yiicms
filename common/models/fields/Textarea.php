<?php
namespace common\models\Field;

use app\services\FieldValueTypeService;
use common\models\Model;
use common\models\Modelfield;

/**
 * 多行文本框
 * @package common\models\Field
 */
class Textarea extends FieldValueType{

    public function __construct()
    {
        $this->name = FieldValueTypeService::TYPE_TEXTAREA;
        $this->nickname = '多行文本框';
        $this->type = 'text';
        $this->showInList = false;
        $this->allowIndex = false;
        $this->minLength = 0;
        $this->maxLength = 3000;
        $this->allowSearch = false;
        $this->allowFulltext = true;
        $this->allowIsunique = false;
    }

}