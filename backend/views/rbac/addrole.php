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
<div class="wrapper-tab"><a href="/rbac/roles">角色列表</a>  <a class="active" href="/rbac/add-role">添加角色</a></div>
<form method="post" id="form1">
    <table class="my-table1 special">
        <tr>
            <th>父角色</th>
            <td>
                <select name="parentid">
                    <option value="0">无</option>
                    <?= $roles ?>
                </select>
            </td>
        </tr>
        <tr>
            <th>角色名</th>
            <td><input name="name" type="text"/></td>
        </tr>
        <tr>
            <th>描述</th>
            <td><input type="text" name="description"/></td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="javascript:void(0);"  class="btn btn-success form-sub" onclick="form1.submit()"><span class="glyphicon glyphicon-plus"></span> 添加</a>
            </td>
        </tr>
    </table>
</form>