<?php
namespace common\models\Field;

use app\services\FieldValueTypeService;
use common\models\Model;
use common\models\Modelfield;

/**
 * 文件上传
 * @package common\models\Field
 */
class Downfile extends FieldValueType{

    public function __construct()
    {
        $this->name = FieldValueTypeService::TYPE_DOWNFILE;
        $this->nickname = '文件上传';
        $this->type = 'varchar(1500)';
        $this->showInList = false;
        $this->allowIndex = false;
        $this->minLength = 0;
        $this->maxLength = 50;
        $this->allowSearch = false;
        $this->allowFulltext = false;
        $this->allowIsunique = false;
    }

}