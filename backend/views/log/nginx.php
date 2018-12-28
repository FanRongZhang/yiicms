
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
        <a href="/log/nginx"  class="active">服务器日志管理</a>
        <a href="/log/app">应用程序错误日志</a>
    </div>
<ul style="font-size: 25px;height: 30px;line-height: 30px;">
<?php
    foreach ($files as $oneFile):
?>
    <li>
        <div>

            <span>文件名称：<a href="down?path=<?= $oneFile['src'] ?>" target="_blank"><?= $oneFile['src'] ?></a></span>

            <span>文件大小：<?= bcdiv($oneFile['size'], 1024 * 1024, 2) ?>M</span>

            <span>修改时间：<?= date('Y-m-d H:i:s', $oneFile['mtime']) ?></span>

            <span><a href="delete?path=<?= $oneFile['src'] ?>" target="_blank">删除</a></span>

        </div>
    </li>
<?php
    endforeach;
?>
</ul>