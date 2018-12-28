<?php
namespace common\models\Field;

use app\services\FieldValueTypeService;
use common\models\Model;
use common\models\Modelfield;

/**
 * 编辑器
 * @package common\models\Field
 */
class Editor extends FieldValueType{

    public function __construct()
    {
        $this->name = FieldValueTypeService::TYPE_EDITOR;
        $this->nickname = '编辑器';
        $this->type = 'text';
        $this->showInList = false;
        $this->allowIndex = false;
        $this->minLength = 0;
        $this->maxLength = 3000;
        $this->allowSearch = false;
        $this->allowFulltext = false;
        $this->allowIsunique = false;
    }

}