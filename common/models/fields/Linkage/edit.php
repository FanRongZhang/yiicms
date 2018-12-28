<?php
/* @var $model \common\models\Model */
/* @var $modelField \common\models\Modelfield */
/* @var $aryUISetting array */
/* @var $value string */
?>

<table cellpadding="2" cellspacing="1" width="98%">
    <tr>
        <td>菜单ID</td>
        <td><input type="text" id="linkageid" name="setting[linkageid]" value="<?php echo $setting['linkageid'];?>" size="5">
            <input type='button' value="在列表中选择" onclick="omnipotent('selectid','?m=admin&c=linkage&a=public_get_list','在列表中选择')" class="button">
            请到导航 扩展 > 联动菜单 > 添加联动菜单</td>
    </tr>
    <tr>
        <td>显示方式</td>
        <td>
            <input name="setting[showtype]" value="0" type="radio" <?php if($setting['showtype']==0) echo 'checked';?>>
            只显示名称
            <input name="setting[showtype]" value="1" type="radio" <?php if($setting['showtype']==1) echo 'checked';?>>
            显示完整路径
            <input name="setting[showtype]" value="2" type="radio" <?php if($setting['showtype']==2) echo 'checked';?>>
            返回联动菜单id
            <input name="setting[showtype]" value="3" type="radio" <?php if($setting['showtype']==3) echo 'checked';?>>
            返回菜单层级数组
        </td>
    </tr>

</table>