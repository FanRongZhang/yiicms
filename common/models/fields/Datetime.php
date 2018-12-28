<?php
namespace common\models\Field;

use app\services\FieldValueTypeService;
use common\models\Model;
use common\models\Modelfield;

/**
 * 时间
 * @package common\models\Field
 */
class Datetime extends FieldValueType{

    public function __construct()
    {
        $this->name = FieldValueTypeService::TYPE_DATETIME;
        $this->nickname = '时间';
        $this->type = 'datetime';
        $this->showInList = true;
        $this->allowIndex = true;
        $this->minLength = 0;
        $this->maxLength = 50;
        $this->allowSearch = true;
        $this->allowFulltext = false;
        $this->allowIsunique = false;
    }

}