<?php
namespace common\models\Field;

use app\services\FieldValueTypeService;
use common\models\Model;
use common\models\Modelfield;

/**
 * 默认选择的会员组
 * @package common\models\Field
 */
class Groupid extends FieldValueType{

    public function __construct()
    {
        $this->name = FieldValueTypeService::TYPE_GROUPID;
        $this->nickname = '默认选择的会员组';
        $this->type = 'int';
        $this->showInList = true;
        $this->allowIndex = true;
        $this->minLength = 0;
        $this->maxLength = 50;
        $this->allowSearch = true;
        $this->allowFulltext = false;
        $this->allowIsunique = false;
    }

}