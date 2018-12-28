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
<div class="wrapper-tab"><a href="/rbac/user-list">管理员列表</a>  <a class="active" href="/rbac/add-user">添加管理员</a></div>
<form method="post" id="form1">
<table class="my-table1 special">
    <tr>
        <th>选择角色</th>
        <td>
            <select name="roleid">
                <?= $roleList ?>
            </select>
        </td>
    </tr>
    <tr>
        <th>用户名</th>
        <td><input type="text" name="username"/></td>
    </tr>
    <tr>
        <th>密码</th>
        <td><input type="password" name="password"/></td>
    </tr>
    <tr>
        <th>邮箱</th>
        <td><input type="text" name="email"/></td>
    </tr>
    <tr>
        <td colspan="2">
            <a href="javascript:void(0);"  class="btn btn-success form-sub" onclick="form1.submit()"><span class="glyphicon glyphicon-plus"></span> 添加</a>
        </td>
    </tr>
</table>
</form>