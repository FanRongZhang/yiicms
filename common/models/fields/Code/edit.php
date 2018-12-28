<?php
/* @var $model \common\models\Model */
/* @var $modelField \common\models\Modelfield */
/* @var $aryUISetting array */
/* @var $value string */
$code = $aryUISetting['code'];
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

<input type="hidden" name="setting[code]" />

<div style="position: relative;width:100%;">
    <pre id="editor"><?= \yii\helpers\Html::encode( trim($code) ? trim($code) : '<?php' ) ?>
    </pre>
</div>

<div>
    <a class="btn btn_alert" style="width: 100%;margin-top:5px;margin-bottom:5px;" onclick="processCode()">试运行</a>
    <div id="coderesult" style="width:100%;height:250px;border: solid 3px black;overflow: auto;"></div>
</div>

<script src="/js/ace-builds-master/src-noconflict/ace.js" type="text/javascript" ></script>
<script src="/js/ace-builds-master/src-noconflict/ext-language_tools.js"></script>

<script>
    var editor = ace.edit("editor");
    editor.setOptions({
        enableBasicAutocompletion: true,
        enableSnippets: true,
        enableLiveAutocompletion: true
    });
    editor.setTheme("ace/theme/monokai");
    editor.session.setMode("ace/mode/php");
</script>

<script>
    pushFuncToSubmitAction(function () {
        var dom = getFirstElementByName('setting[code]');
        dom.value = editor.getValue();
        return true;
    })

    var processCode = function () {
        $.ajax('/code/process',{
            method:"post",
            data:"code="+editor.getValue(),
            success:function ($html) {
                $('#coderesult').html($html);
            },error:function ($html) {
                console.log($html);
                $('#coderesult').html($html.responseText);
            }
        })
    }
</script>