<?php
/* @var $model \common\models\Model */
/* @var $modelField \common\models\Modelfield */
/* @var $aryUISetting array */
/* @var $value string */
?>


    <input type="text"
           name="<?= $model->tablename ?>[<?= $modelField->field ?>]"
            <?= $modelField->formattribute ?>
           value="<?= $value ?>"
           pattern="<?= $modelField->pattern ?>"
           title="<?= $modelField->tips ?>"
           tips = "<?= $modelField->tips ?>"
           width="<?= $aryUISetting['width'] ?>"
    />