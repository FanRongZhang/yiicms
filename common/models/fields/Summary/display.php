<?php
/* @var $model \common\models\Model */
/* @var $modelField \common\models\Modelfield */
/* @var $aryUISetting array */
/* @var $value string */
?>

    <textarea name="<?= $model->tablename ?>[<?= $modelField->field ?>]"
              <?= $modelField->formattribute ?>
              pattern="<?= $modelField->pattern ?>"
              title="<?= $modelField->tips ?>"
              tips = "<?= $modelField->tips ?>"
              style="width:<?= isset($aryUISetting['width']) ? $aryUISetting['width'] : 350 ?>;height:<?= isset($aryUISetting['height']) ? $aryUISetting['height'] : 200 ?>"
    ><?= $value ?></textarea>