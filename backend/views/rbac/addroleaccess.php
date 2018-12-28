<script src="/js/addroleaccess.js"></script>
<style>
    .ul1 {background: #fff;padding-left: 10px}
    ul ul{padding-left: 20px;background:#fff;}
    ul .ul-bg {background:#fff url(/img/line_conn.gif) 8px repeat-y;}
    ul li {position: relative;cursor: pointer;overflow: hidden;}
    ul .fold-item:hover {background: rgba(213,231,245,0.6);}
   .ul1 ul:last-child li {background: url(/img/menu-line.jpg) left -15px no-repeat;border-left: 1px dotted #cacaca;}
    .ul1 ul:last-child li:last-child {border-left: none;background: url(/img/menu-line1.jpg) left -15px no-repeat;}
    /*   ul li.liShow:before{content: '+';position:absolute;top:0;height: 40px;width:20px;line-height: 40px;text-align: center;}
       .ul1 li.liShow:before {left:0;}
       .ul2 li.liShow:before {left:20px;}
       .ul3 li.liShow:before {left:40px;}
       .ul4 li.liShow:before {left:60px;}
       .ul5 li.liShow:before {left:80px;}
       ul li.liHide:before{content: '-';position:absolute;top:0;left:-20px;height: 40px;width:20px;line-height: 40px;text-align: center;} */
    ul div {height:40px;line-height: 40px;}
    .ul1 .fold-item1 {font-size:16px;}
    .ul2 .fold-item2 {font-size:15px;}
    .ul3 .fold-item3 {font-size:14px;}
    .ul4 .fold-item4 {font-size:13px;}
    .ul5 .fold-item5 {font-size:12px;}
    .ulhide {display: none;}
    .ulshow {display:block;}
    .ul1 {display: block;}
    .ul1 span {margin-left: 10px;}
    .accesstext {display: inline;}
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
        <a href="/rbac/roles"  class="active">角色与权限</a>
        <a href="/rbac/user-list">管理员账号</a>
        <a href="javascript:;">后台登录记录</a>
        <a href="/rbac/access-list">后台菜单</a>
    </div>
<input type="hidden" value="<?= $roleId ?>" id="roleId"/>
<div class="wrapper-header"><h1>给角色添加权限</h1></div>
<?= $accessList ?>
<div style="width: 100%;background: #fff;padding:20px">
    <button id="access" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> 授权</button>
</div>
<script>
    $(function(){
      //  控制input的选中
        $(".fold-item input[type='checkbox']").click(function() {
            if($(this).is(':checked')){
                $(this).parent().siblings().find('input').prop("checked", true);
            }else {
                $(this).parent().siblings().find('input').prop("checked", false);
            }
            $(".fold-item input[type='checkbox']").each(function() {
                if($(this).parent().siblings().hasClass('ulhide') && $(this).parent().siblings().find('input:checked').length==0){
                    $(this).prop("checked", false);
                }else if ($(this).parent().siblings().find('input:checked').length!==0){
                    $(this).prop("checked", true);
                }
            });

        });



        $(".ul1 li").find(".ulhide").each(function() {
            $(this).siblings('').find('.state').addClass('glyphicon glyphicon glyphicon-plus');
            $(this).siblings('.fold-item').find('.file-state').removeClass('glyphicon glyphicon-file');
            $(this).siblings('.fold-item').find('.file-state').addClass('glyphicon glyphicon-folder-open');
        });
        $('.ul1 .fold-item1 .state').addClass('glyphicon glyphicon glyphicon-plus');
        $('.ul1 .fold-item1 .file-state').addClass('glyphicon glyphicon-folder-open');
        $('.ul1 .state').click(function() {
            if($(this).parent().siblings('ul').hasClass('ulhide')){
                $(this).parent().siblings('ul').toggle();
                if($(this).hasClass("glyphicon glyphicon-plus")){
                    $(this).removeClass('glyphicon glyphicon-plus');
                    $(this).addClass('glyphicon glyphicon-minus');
                }else{
                    $(this).removeClass('glyphicon glyphicon-minus');
                    $(this).addClass('glyphicon glyphicon-plus');
                }
            }
        });
        $('.accesstext').click(function() {
            if($(this).parent().siblings('ul').hasClass('ulhide')) {
                $(this).parent().siblings('ul').toggle();
                if ($(this).siblings('.state').hasClass("glyphicon glyphicon-plus")) {
                    $(this).siblings('.state').removeClass('glyphicon glyphicon-plus');
                    $(this).siblings('.state').addClass('glyphicon glyphicon-minus');
                } else if ($(this).siblings('.state').hasClass("glyphicon glyphicon-minus")) {
                    $(this).siblings('.state').removeClass('glyphicon glyphicon-minus');
                    $(this).siblings('.state').addClass('glyphicon glyphicon-plus');
                } else {
                    return true;
                }
            }
        });
    });
</script>