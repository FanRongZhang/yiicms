<?php
/* @var $model \common\models\Model */
/* @var $modelField \common\models\Modelfield */
/* @var $aryUISetting array */
/* @var $value string */
?>

<div>
    模版分类:
    <select name="setting[templatename]"  >
        <option value="zhaokao" <?= $value=='zhaokao' ? 'selected' : '' ?> >招考公告</option>
        <option value="mianshi" <?= $value=='mianshi' ? 'selected' : '' ?> >面试公告</option>
        <option value="fushen" <?= $value=='fushen' ? 'selected' : '' ?> >复审公告</option>
        <option value="kaoshi" <?= $value=='kaoshi' ? 'selected' : '' ?> >考试公告</option>
        <option value="rending" <?= $value=='rending' ? 'selected' : '' ?> >认定公告</option>
        <option value="dagang" <?= $value=='dagang' ? 'selected' : '' ?> >大纲公告</option>
    </select>
</div>