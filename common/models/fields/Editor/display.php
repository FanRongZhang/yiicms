<?php
/* @var $model \common\models\Model */
/* @var $modelField \common\models\Modelfield */
/* @var $aryUISetting array */
/* @var $value string */
?>

    <input type="hidden"  id="hidden_<?= $modelField->field ?>" />

    <script id="container<?= $modelField->field ?>" name="<?= $model->tablename ?>[<?= $modelField->field ?>]" type="text/plain" style="width:100%;min-height:400px;"><?= $value ?></script>

    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue<?= $modelField->field ?> = UE.getEditor('container<?= $modelField->field ?>');
        ue<?= $modelField->field ?>.ready(function(){
            ue<?= $modelField->field ?>.setHeight("400");
        });

        pushFuncToSubmitAction(function () {
            //$("#hidden_<?= $modelField->field ?>").val( ue<?= $modelField->field ?>.getContent() );
            return true;
        })

        setInterval(function () {
            $(document).find('.edui-dialog-body.edui-default').css("width","700px");
            $(document).find('.edui-dialog-Content.edui-default').css("height","400px");
        },2500);
        $(function() {

        })
    </script>