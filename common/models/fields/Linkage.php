<?php
namespace common\models\Field;

use app\services\FieldValueTypeService;
use common\models\Model;
use common\models\Modelfield;

/**
 * 联动菜单
 * @package common\models\Field
 */
class Linkage extends FieldValueType{

    public function __construct()
    {
        $this->name = FieldValueTypeService::TYPE_LINKAGE;
        $this->nickname = '联动选择器';
        $this->type = 'char(50)';
        $this->showInList = true;
        $this->allowIndex = true;
        $this->minLength = 0;
        $this->maxLength = 50;
        $this->allowSearch = true;
        $this->allowFulltext = false;
        $this->allowIsunique = true;
    }

}