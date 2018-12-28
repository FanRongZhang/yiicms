<style>
    ul {background: #fff;}
    ul li {position: relative;cursor: pointer;}
    ul .fold-item:hover {background: rgba(213,231,245,0.6);}
    ul li.liShow:before{content: '+';position:absolute;top:0;height: 40px;width:20px;line-height: 40px;text-align: center;}
    .ul1 li.liShow:before {left:0;}
    .ul2 li.liShow:before {left:20px;}
    .ul3 li.liShow:before {left:40px;}
    .ul4 li.liShow:before {left:60px;}
    .ul5 li.liShow:before {left:80px;}
    ul li.liHide:before{content: '-';position:absolute;top:0;left:-20px;height: 40px;width:20px;line-height: 40px;text-align: center;}
    ul div {height:40px;line-height: 40px;}
    .fold-item1{text-indent: 20px;}
    .fold-item2{text-indent: 40px;}
    .fold-item3{text-indent: 60px;}
    .fold-item4{text-indent: 80px;}
    .fold-item5{text-indent: 100px;}
    .ul1 .fold-item1 {font-size:16px;}
    .ul2 .fold-item2 {font-size:15px;}
    .ul3 .fold-item3 {font-size:14px;}
    .ul4 .fold-item4 {font-size:13px;}
    .ul5 .fold-item5 {font-size:12px;}
    .ulhide {display: none;}
    .ulshow {display:block;}
    .ul1 {display: block;}
    .edit {float: right;text-indent: 0}
    .edit a {margin-right:20px;}
</style>
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
<div class="wrapper-tab"><a class="active" href="/rbac/access-list">菜单列表</a>  <a href="/rbac/add-access">添加菜单</a></div>
<?= $accessList ?>
<script language="javascript">

    function delcfm() {
        if (!confirm("确认要删除？")) {
            window.event.returnValue = false;
        }
    }
</script>
<script>
    $(function(){
      $(".ul1 li").find(".ulhide").each(function() {
          $(this).parent().addClass('liShow');
      });
        $('.ul1 .fold-item').click(function() {
            $(this).siblings('ul').toggle();
            $(this).parent().toggleClass('liHide');
        });
    });
</script>
