<?php
namespace common\models\Field;

use app\services\FieldValueTypeService;
use common\models\Model;
use common\models\Modelfield;

/**
 * 作者
 * @package common\models\Field
 */
class Author extends FieldValueType{
    public function __construct()
    {
        $this->name = FieldValueTypeService::TYPE_AUTHOR;
        $this->nickname = '作者';
        $this->type = 'char(30)';
        $this->showInList = true;
        $this->allowIndex = true;
        $this->minLength = 0;
        $this->maxLength = 30;
        $this->allowSearch = true;
        $this->allowFulltext = false;
        $this->allowIsunique = false;
    }
}