<?php
/* @var $category  \common\models\Articlecategory */
/* @var $aryCatory  \common\models\Articlecategory[] */
/* @var $aryFieldValueType  \common\models\Field\FieldValueType[] */
/* @var $contentModel \common\models\Model */
/* @var $aryModelFields \common\models\Modelfield[] */
/* @var $aryTheRecord array */
/* @var $categoryList \common\models\Articlecategory[] */
?>

<!-- 配置文件 -->
<script type="text/javascript" src="/js/ueditor/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/js/ueditor/ueditor.all.js"></script>
<!--自定义编辑器按钮-->
<script type="text/javascript" src="/js/ueditor/btns.js"></script>

<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="/js/jQuery-File-Upload-9.18.0/js/vendor/jquery.ui.widget.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="/js/jQuery-File-Upload-9.18.0/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="/js/jQuery-File-Upload-9.18.0/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="/js/jQuery-File-Upload-9.18.0/js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="/js/jQuery-File-Upload-9.18.0/js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="/js/jQuery-File-Upload-9.18.0/js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="/js/jQuery-File-Upload-9.18.0/js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="/js/jQuery-File-Upload-9.18.0/js/jquery.fileupload-validate.js"></script>



<script>
    var isThereExtInfo = function () {
        return true;
        var select = document.getElementById('sltcatgory');
        var ary = [
            '招考公告',
            '资格复审公告',
            '面试公告',
            '体测公告',
            '体检公告',
        ];
        var haveExtInfo = false;
        for(var i in  ary){
            var txt = ary[i];
            if (select.options[select.options.selectedIndex].text.indexOf(txt) != -1) {
                haveExtInfo = true;
                break;
            }
        }
        console.log('haveExtInfo:'+haveExtInfo+"\r\n");
        if(haveExtInfo){
            $('#extgreeninfotip').html('温馨提示：存在扩展信息');
        }else{
            $('#extgreeninfotip').html('');
        }
    }


    $(function () {
        isThereExtInfo();
    });


</script>
<nav class="breadcrumb">
    <i class="Hui-iconfont">&#xe67f;</i>
    <a href="#"> 首页</a>
    <span class="c-gray en">&gt;</span>
    <a href="#">系统管理</a>
    <span class="c-gray en">&gt;</span>
    <a href="">基本设置</a>
    <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="page-container">

<form method="post" enctype="multipart/form-data">

    <input type="hidden" name="<?= $contentModel->tablename ?>[id]" value="<?= $aryTheRecord['id'] ?>">
    <table class="my-table-vertical">
        <tbody>
        <tr>
            <td colspan="2">
                <div class="wrapper-header">
                    <h1>
                        编辑表<?=  $category->text  ?>ID为<?= $aryTheRecord['id'] ?>的记录
                        <span id="extgreeninfotip"></span>
                    </h1>
                </div>
                <input type="hidden" name="<?= $contentModel->tablename ?>[category]" value="<?= $category->id ?>" />
            </td>
        </tr>
        <tr>
            <th>考试名称</th>
            <td>
                <select name="<?= $contentModel->tablename ?>[examid]">
                    <?php
                    foreach($examObj as $option):
                        ?>
                        <option value="<?= $option->id ?>" <?= $aryTheRecord['examid']==$option->id?'selected':'' ?> ><?= $option->name ?></option>
                        <?php
                    endforeach;
                    ?>
                </select>
                <input type="text"  onkeyup="findArea($(this).val(),'<?= $contentModel->tablename ?>[examid]')" style="width: 120px;" placeholder="搜索考试"/>
            </td>
        </tr>

        <tr>
            <th>内容分类</th>
            <td>
                <select id="sltcatgory" name="<?= $contentModel->tablename ?>[category]">
                    <?php
                    foreach($categoryList as $oneCategory):
                        ?>

                        <option value="<?= $oneCategory['id'] ?>"  <?= $aryTheRecord['category']==$oneCategory['id']?'selected':'' ?> ><?= $oneCategory['text'] ?><?= $oneCategory['iscontentcategory'] == 0 ? '[非内容节点]' : '' ?></option>

                        <?php
                    endforeach;
                    ?>
                </select>
            </td>
        </tr>

        <?php
        foreach ($aryModelFields as $oneField):
            $arySetting = json_decode(trim($oneField->setting),true);
            if(!$arySetting){
                $arySetting = [];
            }
        ?>
        <tr>
            <th style="width: 200px;"><?= $oneField->name ?></th>
            <td>
                <?= \app\services\FieldValueTypeService::getTheType($oneField->fieldvaluetype)->display($contentModel, $oneField , $arySetting , $aryTheRecord[$oneField->field]) ?>
            </td>
        </tr>
        <?php
        endforeach;
        ?>

        <tr>
            <th>是否公开</th>
            <td>
                <input type="radio" name="<?= $contentModel->tablename ?>[is_public]" value="1" <?= $aryTheRecord['is_public'] == 1 ? 'checked' : '' ?> />是
                <input type="radio" name="<?= $contentModel->tablename ?>[is_public]" value="0" <?= $aryTheRecord['is_public'] == 0 ? 'checked' : '' ?>  />否
            </td>
        </tr>
        <tr>
            <th>是否推送该信息给微定制用户</th>
            <td>
                <select name="pushtowdz">
                    <option value="0">否</option>
                    <option value="1">是</option>
                </select>
            </td>
        </tr>

        </tbody>
    </table>
    <div class="fixed-bottom-btn">
        <a type="submit" class="btn btn-success form-sub" onclick="if(beforeSubmit())document.forms[0].submit()"><span class="glyphicon glyphicon-plus"></span> 提交</a>
    </div>
</form>

<script>
    var findArea = function (txt,domName) {
        var select = getFirstElementByName(domName);
        for (var i = 0; i < select.options.length; i++) {
            if (select.options[i].text.indexOf(txt) != -1) {
                select.options[i].selected = true;
                break;
            }
        }
    }
</script>


<script>
    $(function () {
        $('#sltcatgory').change(function () {
            isThereExtInfo();
        });
    });
    isThereExtInfo();
</script>