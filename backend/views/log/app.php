<?php
/* @var $list common\models\Applog[] */
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
        <a href="/log/nginx">服务器日志管理</a>
        <a href="/log/app"  class="active">应用程序错误日志</a>
    </div>

    <div class="wrapper-header">
        <a class="btn btn-danger" href="delapplog"><span class="Hui-iconfont Hui-iconfont-del2"></span> 删除记录</a>
        <a class="btn btn-secondary"  href="queue"><span class="Hui-iconfont Hui-iconfont-canshu"></span> Queue</a>
        <a class="btn btn-secondary"  href="pm"><span class="Hui-iconfont Hui-iconfont-canshu"></span> PM-FPM </a>
        <a class="btn btn-secondary"  href="ginx"><span class="Hui-iconfont Hui-iconfont-canshu"></span> NGINX</a>
        <a class="btn btn-secondary"  href="slowsql"><span class="Hui-iconfont Hui-iconfont-canshu"></span> Slow Sql</a>
    </div>

<table class="my-table">
    <tbody>
        <tr>
            <th>ID</th>
            <th>类型</th>
            <th>文件</th>
            <th>行</th>
            <th>消息</th>
            <th>跟踪</th>
            <th>时间</th>
        </tr>
        <?php
        foreach ($list as $oneLog):
            ?>
            <tr>
                <td><?= $oneLog->id ?></td>
                <td><?= $oneLog->type ?></td>
                <td><?= $oneLog->file ?></td>
                <td><?= $oneLog->line ?></td>
                <td><?= $oneLog->msg ?></td>
                <td><?= $oneLog->trace ?></td>
                <td><?= date('Y-m-d H:i:s',$oneLog->created_at) ?></td>
            </tr>
            <?php
        endforeach;
        ?>
    </tbody>
</table>