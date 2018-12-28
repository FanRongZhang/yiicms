<?php
/* @var $model \common\models\Model */
/* @var $modelField \common\models\Modelfield */
/* @var $aryUISetting array */
/* @var $value string */
?>


<table cellpadding="2" cellspacing="1" width="98%">
    <tr>
        <td width="100">选项列表</td>
        <td><textarea name="setting[options]" rows="2" cols="20" id="options" style="height:100px;width:200px;"><?php echo $setting['options'];?></textarea></td>
    </tr>
    <tr>
        <td>选项类型</td>
        <td>
            <input type="radio" name="setting[boxtype]" value="radio" <?php if($setting['boxtype']=='radio') echo 'checked';?> onclick="$('#setcols').show();$('#setsize').hide();"/> 单选按钮
            <input type="radio" name="setting[boxtype]" value="checkbox" <?php if($setting['boxtype']=='checkbox') echo 'checked';?> onclick="$('#setcols').show();$('setsize').hide();"/> 复选框
            <input type="radio" name="setting[boxtype]" value="select" <?php if($setting['boxtype']=='select') echo 'checked';?> onclick="$('#setcols').hide();$('setsize').show();" /> 下拉框
            <input type="radio" name="setting[boxtype]" value="multiple" <?php if($setting['boxtype']=='multiple') echo 'checked';?> onclick="$('#setcols').hide();$('setsize').show();" /> 多选列表框
        </td>
    </tr>
    <tbody id="setcols" style="display:">
    <tr>
        <td>每列宽度</td>
        <td><input type="text" name="setting[width]" value="<?php echo $setting['width'];?>" size="5" class="input-text"> px</td>
    </tr>
    </tbody>
    <tbody id="setsize" style="display:none">
    <tr>
        <td>高度</td>
        <td><input type="text" name="setting[size]" value="<?php echo $setting['size'];?>" size="5" class="input-text"> 行</td>
    </tr>
    </tbody>
    <tr>
        <td>默认值</td>
        <td><input type="text" name="setting[defaultvalue]" size="40" class="input-text" value="<?php echo $setting['defaultvalue'];?>"></td>
    </tr>
</table>
