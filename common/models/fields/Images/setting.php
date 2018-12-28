<?php
/* @var $model \common\models\Model */
/* @var $modelField \common\models\Modelfield */
/* @var $aryUISetting array */
/* @var $value string */
?>


<table cellpadding="2" cellspacing="1" width="98%">
    <tr>
        <td>允许上传的图片类型</td>
        <td><input type="text" name="setting[upload_allowext]" value="gif|jpg|jpeg|png|bmp" class="input-text"></td>
    </tr>
    <tr>
        <td>是否从已上传中选择</td>
        <td><label><input type="radio" name="setting[isselectimage]" value="1"> 是</label> <label><input type="radio" name="setting[isselectimage]" value="0" checked> 否</label></td>
    </tr>
    <tr>
        <td>允许同时上传的个数</td>
        <td><input type="text" name="setting[upload_number]" value="10"></td>
    </tr>
</table>