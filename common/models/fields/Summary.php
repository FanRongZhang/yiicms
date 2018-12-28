<?php
namespace common\models\Field;

use app\services\FieldValueTypeService;
use common\models\Model;
use common\models\Modelfield;

/**
 * 文章描述
 * @package common\models\Field
 */
class Summary extends FieldValueType{

    public function __construct()
    {
        $this->name = FieldValueTypeService::TYPE_SUMMARY;
        $this->nickname = '文章描述';
        $this->type = 'text';
        $this->showInList = false;
        $this->allowIndex = false;
        $this->minLength = 0;
        $this->maxLength = 500;
        $this->allowSearch = false;
        $this->allowFulltext = true;
        $this->allowIsunique = false;
    }

}