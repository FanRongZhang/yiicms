<?php
/* @var $model \common\models\Model */
/* @var $modelField \common\models\Modelfield */
/* @var $aryUISetting array */
/* @var $value string */
?>


    <input placeholder="请输入日期"  type="text" id="laydate" style="width: 150px;"
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

<script>
    //执行一个laydate实例
    laydate.render({
        elem: '#laydate', //指定元素
        type: 'datetime'
    });
</script>