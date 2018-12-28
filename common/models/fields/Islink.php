<?php
namespace common\models\Field;

use app\services\FieldValueTypeService;
use common\models\Model;
use common\models\Modelfield;

/**
 * 链接
 * @package common\models\Field
 */
class Islink extends FieldValueType{

    public function __construct()
    {
        $this->name = FieldValueTypeService::TYPE_ISLINK;
        $this->nickname = '链接';
        $this->type = 'char(150)';
        $this->showInList = true;
        $this->allowIndex = true;
        $this->minLength = 0;
        $this->maxLength = 50;
        $this->allowSearch = true;
        $this->allowFulltext = false;
        $this->allowIsunique = true;
    }

}