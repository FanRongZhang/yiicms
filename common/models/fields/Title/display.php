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
    $(function(){
        $("input[name='<?= $model->tablename ?>[<?= $modelField->field ?>]']").blur(function(){
            $.ajax({
                url: '/contentmodel/str-compare',
                type: 'POST',
                data: {title: $(this).val(),tablename: "<?= $model->tablename ?>"},
                success: function(res){
                    if(res == 1){
                        $("#checkinfo").html("此标题已存在");
                    }else{
                        $("#checkinfo").html("");
                    }
                }
            });
        });
    });
</script>