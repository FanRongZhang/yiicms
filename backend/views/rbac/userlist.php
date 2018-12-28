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
        <a href="/rbac/roles">角色与权限</a>
        <a href="/rbac/user-list"  class="active">管理员账号</a>
        <a href="javascript:;">后台登录记录</a>
        <a href="/rbac/access-list">后台菜单</a>
    </div>
<div class="wrapper-tab"><a class="active" href="/rbac/user-list">管理员列表</a>  <a href="/rbac/add-user">添加管理员</a></div>
<table class="my-table">
    <tr>
        <th>角色名</th>
        <th>操作</th>
    </tr>
    <?php
    foreach ($userList as $user):
    ?>
    <tr>
        <td><?= $user->username ?></td>
        <td>
            <a class="my-menu" href="/rbac/edit-user?id=<?= $user->id ?>"><span class="glyphicon glyphicon-pencil"></span> 修改</a>
            <a class="my-menu" href="/rbac/del-user?id=<?= $user->id ?>" onclick="javascript:return confirm('确认删除？')"><span class="glyphicon glyphicon-trash"></span> 删除</a>
        </td>
    </tr>
    <?php
    endforeach;
    ?>
</table>