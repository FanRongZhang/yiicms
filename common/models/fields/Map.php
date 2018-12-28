<?php
namespace common\models\Field;

use app\services\FieldValueTypeService;
use common\models\Model;
use common\models\Modelfield;

/**
 * 地图
 * @package common\models\Field
 */
class Map extends FieldValueType{

    public function __construct()
    {
        $this->name = FieldValueTypeService::TYPE_MAP;
        $this->nickname = '地图';
        $this->type = 'char(150)';
        $this->showInList = true;
        $this->allowIndex = true;
        $this->minLength = 0;
        $this->maxLength = 50;
        $this->allowSearch = false;
        $this->allowFulltext = false;
        $this->allowIsunique = false;
    }

}