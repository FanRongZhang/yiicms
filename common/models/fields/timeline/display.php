<?php
/* @var $model \common\models\Model */
/* @var $modelField \common\models\Modelfield */
/* @var $aryUISetting array */
/* @var $value string */
?>

    <textarea name="<?= $model->tablename ?>[<?= $modelField->field ?>]"
              <?= $modelField->formattribute ?>
              class="<?= $model->tablename ?> <?= $modelField->css ?>"
        <?= $modelField->pattern ? ( 'pattern=\"' . $modelField->pattern .'\"' ) : '' ?>
              tips = "<?= $modelField->tips ?>"
              errortip = "<?= $modelField->errortips ?>"
              _maxlength="<?= $modelField->maxlength ?>"
              isshowinlist="<?= $modelField->isshowinlist ?>"
              isunique="<?= $modelField->isunique ?>"
              isbase="<?= $modelField->isbase ?>"
              issearch="<?= $modelField->issearch ?>"
              issearchinlikestyle="<?= $modelField->issearchinlikestyle ?>"
    ><?= $value ?></textarea>