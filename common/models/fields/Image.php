<?php
namespace common\models\Field;

use app\services\FieldValueTypeService;
use common\models\Model;
use common\models\Modelfield;

/**
 * 图片上传
 * @package common\models\Field
 */
class Image extends FieldValueType{

    public function __construct()
    {
        $this->name = FieldValueTypeService::TYPE_IMAGE;
        $this->nickname = '图片上传';
        $this->type = 'char(150)';
        $this->showInList = true;
        $this->allowIndex = false;
        $this->minLength = 0;
        $this->maxLength = 50;
        $this->allowSearch = false;
        $this->allowFulltext = false;
        $this->allowIsunique = false;
    }

}