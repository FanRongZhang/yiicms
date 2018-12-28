<?php
/* @var $model \common\models\Model */
/* @var $modelField \common\models\Modelfield */
/* @var $aryUISetting array */
/* @var $value string */
?>

<<<<<<< HEAD
<table cellpadding="2" cellspacing="1" width="98%">
    <tr>
        <td width="100">文本框长度</td>
        <td><input type="text" name="setting[size]" value="<?php echo $setting['size'];?>" size="10" class="input-text"></td>
    </tr>
    <tr>
        <td>默认值</td>
        <td><input type="text" name="setting[defaultvalue]" value="<?php echo $setting['defaultvalue'];?>" size="40" class="input-text"></td>
    </tr>
    <tr>
        <td>是否为密码框</td>
        <td><input type="radio" name="setting[ispassword]" value="1" <?php if($setting['ispassword']) echo 'checked';?>> 是 <input type="radio" name="setting[ispassword]" value="0" <?php if(!$setting['ispassword']) echo 'checked';?>> 否</td>
=======

<table cellpadding="2" cellspacing="1" width="98%">
    <tr>
        <td>默认值</td>
        <td><input type="text" name="setting[defaultvalue]" value="<?php echo $aryUISetting['defaultvalue'];?>" class="input-text" ></td>
>>>>>>> f081e7693eee5de028ba8a8196831f4f10c2f9e6
    </tr>
</table>