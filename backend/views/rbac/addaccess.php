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
        <a href="/rbac/user-list">管理员账号</a>
        <a href="javascript:;">后台登录记录</a>
        <a href="/rbac/access-list"  class="active">后台菜单</a>
    </div>
<div class="wrapper-tab"><a href="/rbac/access-list">菜单列表</a>  <a class="active" href="/rbac/add-access">添加菜单</a></div>
<form method="post" id="form1">
<table class="my-table1 special">
    <tr>
        <th>上级</th>
        <td>
            <select name="pid">
                <option value="0">顶级菜单</option>
                <?= $accessList ?>
            </select>
        </td>
    </tr>
    <tr>
        <th>名称</th>
        <td>
            <input type="text" name="des"/>
        </td>
    </tr>
    <tr>
        <th>控制器</th>
        <td>
            <input type="text" name="controller"/>
        </td>
    </tr>
    <tr>
        <th>方法</th>
        <td>
            <input type="text" name="method"/>
        </td>
    </tr>
    <tr>
        <th>url</th>
        <td>
            <input type="text" name="url"/>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <a class="btn btn-success form-sub"  href="javascript:void(0);" onclick="form1.submit()"/><span class="glyphicon glyphicon-plus"></span> 添加</td>
        </td>
    </tr>
</table>
</form>
<script>
    $(function(){
        $("[name='pid']").val("<?= $pid ?>");
    });
</script>