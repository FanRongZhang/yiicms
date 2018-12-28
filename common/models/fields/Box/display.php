<?php
/* @var $model \common\models\Model */
/* @var $modelField \common\models\Modelfield */
/* @var $aryUISetting array */
/* @var $value string */

$aryOptionsReal = [];
$aryOptions = explode("\r\n",trim($aryUISetting['options']));

foreach ($aryOptions as $k => $v) {
    $_ary = explode('|', $v);
    $aryOptionsReal[$_ary[0]] = $_ary[1];
}
?>

<?php
if($aryUISetting['boxtype'] == 'radio') {
    foreach ($aryOptionsReal as $k => $v) {
        ?>
        <label style="margin-left: 10px;">
        <input type="radio"
               name="<?= $model->tablename ?>[<?= $modelField->field ?>]"
                <?= $modelField->formattribute ?>
               value="<?= $v ?>"


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

                <?= $value==$v ?'checked' : '' ?>

        /> <?= $k ?></label>

        <?php
    }
}
?>

<?php
if($aryUISetting['boxtype'] == 'checkbox') {

    $aryValue = explode(',',$value);

    foreach ($aryOptionsReal as $k => $v) {
        ?>
        <input type="checkbox"
               name="<?= $model->tablename ?>[<?= $modelField->field ?>][]"
            <?= $modelField->formattribute ?>
               value="<?= $v ?>"
               pattern="<?= $modelField->pattern ?>"
               title="<?= $modelField->tips ?>"
               tips = "<?= $modelField->tips ?>"
               width="<?= $aryUISetting['width'] ?>"


            <?= in_array($v , $aryValue) ?'checked' : '' ?>

        /> <?= $k ?>

        <?php
    }
}
?>

<?php
if($aryUISetting['boxtype'] == 'select') {
    ?>
    <select name="<?= $model->tablename ?>[<?= $modelField->field ?>]" <?= $modelField->formattribute ?>>
    <?php

    foreach ($aryOptionsReal as $k => $v) {
        ?>

        <option value="<?= $v ?>" <?= $value==$v ? 'selected' : '' ?> ><?= $k ?></option>

        <?php
    }?>
    </select>
    <?php
}
?>



<?php
if($aryUISetting['boxtype'] == 'multiple') {
    $aryValue = explode(',',$value);
    ?>
    <select name="<?= $model->tablename ?>[<?= $modelField->field ?>][]" <?= $modelField->formattribute ?>   multiple='multiple' >
        <?php

        foreach ($aryOptionsReal as $k => $v) {
            ?>

            <option value="<?= $v ?>" <?= in_array($v , $aryValue) ?'selected' : '' ?> ><?= $k ?></option>

            <?php
        }?>
    </select>
    <?php
}
?>