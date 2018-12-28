<?php
/* @var $model \common\models\Model */
/* @var $modelField \common\models\Modelfield */
/* @var $aryUISetting array */
/* @var $value string */
?>


    <input type="number"
           name="<?= $model->tablename ?>[<?= $modelField->field ?>]"
            <?= $modelField->formattribute ?>
           value="<?= $value ?>"

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

    />