<?php
namespace common\models\Field;

use app\services\FieldValueTypeService;
use common\models\Model;
use common\models\Modelfield;

/**
 * 文本框
 * @package common\models\Field
 */
class Text extends FieldValueType{

    public function __construct()
    {
        $this->name = FieldValueTypeService::TYPE_TEXT;
        $this->nickname = '文本框';
        $this->type = 'char(255)';
        $this->showInList = true;
        $this->allowIndex = true;
        $this->minLength = 0;
        $this->maxLength = 255;
        $this->allowSearch = true;
        $this->allowFulltext = true;
        $this->allowIsunique = false;
    }

}