<?php
/*@var $roles \common\models\roles*/
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
        <a href="/rbac/roles"  class="active">角色与权限</a>
        <a href="/rbac/user-list">管理员账号</a>
        <a href="javascript:;">后台登录记录</a>
        <a href="/rbac/access-list">后台菜单</a>
    </div>
<div class="wrapper-tab"><a class="active" href="/rbac/roles">角色列表</a>  <a href="/rbac/add-role">添加角色</a></div>
<table class="my-table">
    <tr>
        <th>角色名</th>
        <th>操作</th>
    </tr>
    <?php
    foreach ($roles as $role):
    ?>
    <tr>
        <td><?= $role->name ?></td>
        <td>
            <a class="my-menu" href="/rbac/add-role-access?roleId=<?= $role->id ?>"><span class="glyphicon glyphicon-pencil"></span> 修改权限</a>
            <a class="my-menu" href="/rbac/del-role?roleId=<?= $role->id ?>" onclick="delcfm()"><span class="glyphicon glyphicon-trash"></span> 删除角色</a>
        </td>
    </tr>
    <?php
    endforeach;
    ?>
</table>
<script language="javascript">
    function delcfm() {
        if (!confirm("确认要删除？")) {
            window.event.returnValue = false;
        }
    }
</script>