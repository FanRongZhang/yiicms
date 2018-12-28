<?php
namespace app\services;

use common\models\Field\Area;
use common\models\Field\Author;
use common\models\Field\Box;
use common\models\Field\Code;
use common\models\Field\Datetime;
use common\models\Field\Downfile;
use common\models\Field\Downfiles;
use common\models\Field\Editor;
use common\models\Field\Groupid;
use common\models\Field\Image;
use common\models\Field\Images;
use common\models\Field\Informationtemplate;
use common\models\Field\Islink;
use common\models\Field\Linkage;
use common\models\Field\Map;
use common\models\Field\Number;
use common\models\Field\Text;
use common\models\Field\Textarea;
use common\models\Field\Content;
use common\models\Field\Summary;
use common\models\Field\Title;

/**
 * 模型字段数据类型服务
 * @package app\services
 */
class FieldValueTypeService{

    private function __construct(){}
    private function __clone(){}

    const TYPE_AUTHOR = 'author';

    const TYPE_BOX = 'box';

    const TYPE_DATETIME = 'datetime';

    const TYPE_DOWNFILE = 'downfile';

    const TYPE_DOWNFILES = 'downfiles';

    const TYPE_EDITOR = 'editor';

    const TYPE_GROUPID = 'groupid';

    const TYPE_IMAGE = 'image';

    const TYPE_IMAGES = 'images';

    const TYPE_ISLINK = 'islink';

    const TYPE_LINKAGE = 'linkage';

    const TYPE_MAP = 'map';

    const TYPE_NUMBER = 'number';

    const TYPE_TEXT = 'text';

    const TYPE_TEXTAREA = 'textarea';

    const TYPE_CONTENT = 'content';

    const TYPE_SUMMARY = 'summary';

    const TYPE_TITLE = 'title';

    const TYPE_CODE = 'code';

    const TYPE_AREA = 'area';

    const TYPE_INFORMATION_TEMPLATE = 'information_template';

    /**
     * 获取所有字段数据类型
     * @return array
     */
    public static function getAllTypes()
    {
        return [
            self::TYPE_AUTHOR => \Yii::createObject(Author::class),
            self::TYPE_BOX => \Yii::createObject(Box::class),
            self::TYPE_DATETIME => \Yii::createObject(Datetime::class),
            self::TYPE_DOWNFILE => \Yii::createObject(Downfile::class),
            self::TYPE_DOWNFILES => \Yii::createObject(Downfiles::class),
            self::TYPE_EDITOR => \Yii::createObject(Editor::class),
            self::TYPE_GROUPID => \Yii::createObject(Groupid::class),
            self::TYPE_IMAGE => \Yii::createObject(Image::class),
            self::TYPE_IMAGES => \Yii::createObject(Images::class),
            self::TYPE_ISLINK => \Yii::createObject(Islink::class),
            self::TYPE_LINKAGE => \Yii::createObject(Linkage::class),
            self::TYPE_MAP => \Yii::createObject(Map::class),
            self::TYPE_NUMBER => \Yii::createObject(Number::class),
            self::TYPE_TEXT => \Yii::createObject(Text::class),
            self::TYPE_TEXTAREA => \Yii::createObject(Textarea::class),
            self::TYPE_CONTENT => \Yii::createObject(Content::class),
            self::TYPE_SUMMARY => \Yii::createObject(Summary::class),
            self::TYPE_TITLE => \Yii::createObject(Title::class),
            self::TYPE_CODE => \Yii::createObject(Code::class),
            self::TYPE_AREA => \Yii::createObject(Area::class),
            self::TYPE_INFORMATION_TEMPLATE => \Yii::createObject(Informationtemplate::class),
        ];
    }

    /**
     *返回该字段数据类型
     * @param $typeName
     * @return \common\models\Field\FieldValueType
     * @throws \Exception
     */
    public static function getTheType($typeName){
        $aryTypes = self::getAllTypes();

        foreach ($aryTypes as $key => $classInstance){
            if($key == $typeName){
                return $classInstance;
            }
        }
        throw new \Exception('无效的数据字段类型'.$typeName);
    }

}