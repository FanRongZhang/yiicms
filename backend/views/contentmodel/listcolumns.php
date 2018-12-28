<?php
/* @var $this \yii\web\View */
/* @var $list \common\models\Modelfield[] */

?>
<nav class="breadcrumb">
    <i class="Hui-iconfont">&#xe67f;</i>
    <a href="#"> 首页</a>
    <span class="c-gray en">&gt;</span>
    <a href="#">网络课程管理</a>
    <span class="c-gray en">&gt;</span>
    老师列表
    <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="page-container">
    <div class="tabBar cl">
        <a href="/contentmodel/list"  class="active">内容模型</a>
        <a href="/category/list">网站分类</a>
        <a href="/sitesetting/exam-type">考试模型</a>
    </div>
<table class="my-table">
    <tbody>
        <tr>
            <th>排序</th>
            <th>字段名</th>
            <th>别名</th>
            <th>数据类型</th>
            <th>是否显示在列表</th>
            <th>是否数据唯一</th>
            <th>是否基本信息</th>
            <th>是否作为列表搜索条件</th>
            <th>操作</th>
        </tr>
        <?php
        foreach ($list as $oneField):
        ?>
        <tr>
            <td><input type="text" dataid="<?= $oneField->id ?>" class="filedOrder" value="<?= $oneField->listorder ?>"/></td>
            <td><?= $oneField->field ?></td>
            <td><?= $oneField->name ?></td>
            <td><?= $oneField->fieldvaluetype ?></td>
            <td><?= $oneField->isshowinlist ?></td>
            <td><?= $oneField->isunique ?></td>
            <td><?= $oneField->isbase ?></td>
            <td><?= $oneField->issearch ?></td>
            <td>
                <a class="my-menu open-newWindow" target="_blank" data-title="修改模型字段" data-href="/contentmodel/edit-field?modelid=<?= $model->id ?>&modelfieldid=<?= $oneField->id ?>"><span class="glyphicon glyphicon-pencil"></span> 修改</a>
                <a class="my-menu" href="del-field?modelid=<?= $model->id ?>&modelfieldid=<?= $oneField->id ?>" onclick="javascript: return confirm('确认删除')"><span class="glyphicon glyphicon-trash"></span> 删除</a>
            </td>
        </tr>
        <?php
        endforeach;
        ?>
    </tbody>
</table>
<script>
    $(function(){
        $(".filedOrder").blur(function(){
            $.ajax({
                url: '/contentmodel/list-columns',
                data: {dataid: $(this).attr("dataid"),ordernum: $(this).val()},
                type: "POST",
                success: function(){

                }
            });
        });
    });
</script>