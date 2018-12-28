<?php
/* @var $model \common\models\Model */
/* @var $modelField \common\models\Modelfield */
/* @var $aryUISetting array */
/* @var $value string */


$code = $aryUISetting['code'];
if($code){
    if(\yii\helpers\StringHelper::startsWith($code,'<?php')){
        $code = substr($code,5);
    }
    try{
        eval($code);
    }catch (\Exception $e){
        echo 'oh pu~~,something went wrong.<hr>';
        echo $e->getTraceAsString();
    }
}
?>

<style type="text/css" media="screen">
    body {
        padding-top: 0px;
    }
    td  span{
        height: 22px;
        line-height: 22px;
    }
    .ace_line{
        height: 22px;
        line-height: 22px;
    }
    .ace_text-input{
        height: 22px;
        line-height: 22px;
        padding:0;
        margin:0;
    }
    #editor {
        width: 100%;
        height: 400px;
        float: left;
        font-size: 18px;
        padding: 0;
        margin: 0;
    }
</style>


<input type="hidden" name="<?= $model->tablename ?>[<?= $modelField->field ?>]" />

<div style="position: relative;width:100%;">
    <pre id="editor"><?= \yii\helpers\Html::encode( trim($value) ? trim($value) : '<?php' ) ?>
    </pre>
</div>

<div>
    <a class="btn btn_alert" style="width: 100%;margin-top:5px;margin-bottom:5px;" onclick="processCode('<?= $modelField->field ?>')">试运行</a>
    <div id="coderesult<?= $modelField->field ?>" style="width:100%;height:250px;border: solid 3px black;overflow: auto;"></div>
</div>

<script src="/js/ace-builds-master/src-noconflict/ace.js" type="text/javascript" ></script>
<script src="/js/ace-builds-master/src-noconflict/ext-language_tools.js"></script>

<script>
    var editor<?= $modelField->field ?> = ace.edit("editor");
    editor<?= $modelField->field ?>.setOptions({
        enableBasicAutocompletion: true,
        enableSnippets: true,
        enableLiveAutocompletion: true
    });
    editor<?= $modelField->field ?>.setTheme("ace/theme/monokai");
    editor<?= $modelField->field ?>.session.setMode("ace/mode/php");
</script>

<script>
    pushFuncToSubmitAction(function () {
        var dom = getFirstElementByName('<?= $model->tablename ?>[<?= $modelField->field ?>]');
        dom.value = editor<?= $modelField->field ?>.getValue();
        return true;
    })

    var processCode = function ($name) {
        var editor = eval('editor'+$name);
        $.ajax('/code/process',{
            method:"post",
            data:"code="+editor.getValue(),
            success:function ($html) {
                $('#coderesult'+$name).html($html);
            },error:function ($html) {
                console.log($html);
                $('#coderesult'+$name).html($html.responseText);
            }
        })
    }
<<<<<<< HEAD
</script>
=======
</script>
>>>>>>> f6880f002248a53185b4400433d7f13ad67cc4a6
