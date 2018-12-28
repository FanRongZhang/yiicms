<?php
/* @var $model \common\models\Model */
/* @var $modelField \common\models\Modelfield */
/* @var $aryUISetting array */
/* @var $value string */
?>


<table cellpadding="2" cellspacing="1" bgcolor="#ffffff">
    <tr>
        <td style="text-align: center"><strong>时间格式：</strong></td>
        <td>
            <input type="radio" name="setting[fieldtype]" id="datetime1" value="date" checked><label style="padding-left: 5px" for="datetime1"> 日期（<?php echo date('Y-m-d');?>）</label><br />
            <input type="radio" name="setting[fieldtype]" id="datetime2" value="datetime_a"><label style="padding-left: 5px" for="datetime2"> 日期+12小时制时间（<?php echo date('Y-m-d h:i:s');?>）</label><br />
            <input type="radio" name="setting[fieldtype]" id="datetime3" value="datetime"><label style="padding-left: 5px" for="datetime3"> 日期+24小时制时间（<?php echo date('Y-m-d H:i:s');?>）</label><br />
            <input type="radio" name="setting[fieldtype]" id="datetime4" value="int"><label style="padding-left: 5px" for="datetime4"> 整数 显示格式：
            <select name="setting[format]">
                <option value="Y-m-d Ah:i:s">12小时制:<?php echo date('Y-m-d h:i:s');?></option>
                <option value="Y-m-d H:i:s">24小时制:<?php echo date('Y-m-d H:i:s');?></option>
                <option value="Y-m-d H:i"><?php echo date('Y-m-d H:i');?></option>
                <option value="Y-m-d"><?php echo date('Y-m-d');?></option>
                <option value="m-d"><?php echo date('m-d');?></option>
            </select>
            </label>
        </td>
    </tr>
</table>