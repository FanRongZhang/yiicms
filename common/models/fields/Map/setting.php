<?php
/* @var $model \common\models\Model */
/* @var $modelField \common\models\Modelfield */
/* @var $aryUISetting array */
/* @var $value string */
?>


<table cellpadding="2" cellspacing="1" width="98%">
    <tr>
        <td>地图接口选择</td>
        <td>
            <label><input type="radio" name="setting[maptype]" value="2"> 百度地图</label>
            <label><input type="radio" name="setting[maptype]" value="1" disabled> MAPABC</label>
        </td>
    </tr>
    <tr>
        <td>地图API Key </td>
        <td><input type="text" name="setting[api_key]" value="" size="30" class="input-text"></td>
    </tr>
    <tr>
        <td>默认城市</td>
        <td><input type="text" name="setting[defaultcity]" value="" size="30" class="input-text"> 直接填写中文城市名称</td>
    </tr>
    <tr style="display: none">
        <td width="100">热门城市</td>
        <td>
            <input style="width:300px;" id="options" cols="20" rows="2" name="setting[hotcitys]" /> 多个城市请使用,逗号分隔</td>
    </tr>
    <tr>
        <td>地图尺寸 </td>
        <td>
            宽度: <input type="text" name="setting[width]" value="" size="10" >px
            高度: <input type="text" name="setting[height]" value="" size="10" >px
        </td>
    </tr>
</table>