<?php
namespace common\models\Field;

use app\services\FieldValueTypeService;
use common\models\Model;
use common\models\Modelfield;

/**
 * 资讯标题
 * @package common\models\Field
 */
class Title extends FieldValueType{
    public function __construct()
    {
        $this->name = FieldValueTypeService::TYPE_TITLE;
        $this->nickname = '资讯标题';
        $this->type = 'char(100)';
        $this->showInList = true;
        $this->allowIndex = true;
        $this->minLength = 0;
        $this->maxLength = 100;
        $this->allowSearch = true;
        $this->allowFulltext = true;
        $this->allowIsunique = false;
    }
}