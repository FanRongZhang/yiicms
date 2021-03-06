<?php
namespace common\models\Field;

use app\services\FieldValueTypeService;
use common\models\Model;
use common\models\Modelfield;

/**
 * 文章内容
 * @package common\models\Field
 */
class Content extends FieldValueType{

    public function __construct()
    {
        $this->name = FieldValueTypeService::TYPE_CONTENT;
        $this->nickname = '文章内容';
        $this->type = 'text';
        $this->showInList = false;
        $this->allowIndex = false;
        $this->minLength = 0;
        $this->maxLength = 5000;
        $this->allowSearch = false;
        $this->allowFulltext = true;
        $this->allowIsunique = false;
    }

}