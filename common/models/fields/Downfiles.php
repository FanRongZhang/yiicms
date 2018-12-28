<?php
namespace common\models\Field;

use app\services\FieldValueTypeService;
use common\models\Model;
use common\models\Modelfield;

/**
 * 多文件上传
 * @package common\models\Field
 */
class Downfiles extends FieldValueType{
    public function __construct()
    {
        $this->name = FieldValueTypeService::TYPE_DOWNFILES;
        $this->nickname = "多文件上传";
        $this->type = 'varchar(255)';
        $this->showInList = false;
        $this->allowIndex = false;
        $this->minLength = 0;
        $this->maxLength = 50;
        $this->allowSearch = false;
        $this->allowFulltext = false;
        $this->allowIsunique = false;
    }
}