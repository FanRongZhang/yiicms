<?php
/* @var $model \common\models\Model */
/* @var $modelField \common\models\Modelfield */
/* @var $aryUISetting array */
/* @var $value string */
?>

<style>
    .level1,.level1 ul {display: flex;flex-direction: column;justify-content: center;flex: auto;}
    .level1 li,.level1 ul {display: flex;flex-direction: row;justify-content: space-between;align-items: center;flex: auto;border: 1px solid #ccc;padding: 0 0 0 5px;margin: 0 0 -1px -1px; cursor: move}
    ul.level1 li input[type="text"]{width: auto;min-width: 100px;}
    li:last-child{border-bottom: none;}
    .level1 {border-bottom:1px solid #ccc; }
    ul.level1 li textarea {width: 100%;height: 50px;}
    .add-dom {margin-left: 5px;}
    .del-dom {margin-left: 5px;}
    .add-val {margin: 0 5px;}
    a.btn-xs {height: auto}
</style>



<input type="hidden" name="<?= $model->tablename ?>[<?= $modelField->field ?>]" />

<!--
json 信息设计组成

[{
    firstName:'',
    items : [
        {
            name : .key.val(),
            value : ''
        },
        {
            name : .key.val(),
            value : ['a','b','c']
        }
    ]
}]
-->
<ul class="level1">
    <a class="add-top-dom btn btn-xs btn-success" title="添加顶级"><span class="glyphicon glyphicon-plus"></span> 添加顶级名称</a>
    <li>
        <input type="text" placeholder="元素大类" value="重要时间节点" />
        <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>
        <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>
        <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>
        <ul class="level2">
            <li>
                <input type="text" value="报名" placeholder="二级子名称，无可留空"/>
                <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>
                <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>
                <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>
                <ul class="level3">
                    <li>
                        <input type="text" value="报名开始" placeholder="数据项目名称"/>
                        <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>
                        <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>
                        <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>
                        <ul class="level4">
                            <li>
                                <textarea>111</textarea>
                            </li>
                            <li>
                                <label><input type="checkbox" value="1" /> 在搜索列表显示</label>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <input type="text" value="报名截至" placeholder="数据项目名称"/>
                        <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>
                        <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>
                        <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>
                        <ul class="level4">
                            <li>
                                <textarea>222</textarea>
                            </li>
                            <li>
                                <label><input type="checkbox" value="1" /> 在搜索列表显示</label>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>
            <li>
                <input type="text" value="考试" placeholder="二级子名称，无可留空"/>
                <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>
                <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>
                <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>
                <ul class="level3">
                    <li>
                        <input type="text" value="笔试" placeholder="数据项目名称"/>
                        <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>
                        <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>
                        <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>
                        <ul class="level4">
                            <li>
                                <textarea>333</textarea>
                            </li>
                            <li>
                                <label><input type="checkbox" value="1" /> 在搜索列表显示</label>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <input type="text" value="成绩查询" placeholder="数据项目名称"/>
                        <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>
                        <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>
                        <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>
                        <ul class="level4">
                            <li>
                                <textarea>444</textarea>
                            </li>
                            <li>
                                <label><input type="checkbox" value="1" /> 在搜索列表显示</label>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <input type="text" value="面试和专业能力测试" placeholder="数据项目名称"/>
                        <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>
                        <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>
                        <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>
                        <ul class="level4">
                            <li>
                                <textarea>555</textarea>
                            </li>
                            <li>
                                <label><input type="checkbox" value="1" /> 在搜索列表显示</label>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li>
        <input type="text" placeholder="元素大类" value="重要网址链接" />
        <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>
        <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>
        <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>
        <ul class="level2">
            <li>
                <input type="text" value="报名" placeholder="二级子名称，无可留空"/>
                <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>
                <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>
                <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>
                <ul class="level3">
                    <li>
                        <textarea>666</textarea>
                    </li>
                    <li>
                        <label><input type="checkbox" value="1" /> 在搜索列表显示</label>
                    </li>
                </ul>
            </li>
            <li>
                <input type="text" value="成绩查询" placeholder="二级子名称，无可留空"/>
                <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>
                <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>
                <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>
                <ul class="level3">
                    <li>
                        <textarea>777</textarea>
                    </li>
                    <li>
                        <label><input type="checkbox" value="1" /> 在搜索列表显示</label>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
</ul>
    <!-- 一个大的信息项 -->
<div class="aaa"></div>
<script>
    $(function() {
        $Li = '<li><input type="text" value="" placeholder="请填写......"/><a class="add-dom btn btn-xs btn-success"><span class="glyphicon glyphicon-plus"></span></a> <a class="del-dom btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span></a><a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a><ul><ul></li>'
        $Textarea = '<li><textarea></textarea></li><li><label><input type="checkbox" value="1" /> 在搜索列表显示</label></li>'
        $(document).on("click",".add-top-dom",function() {
            $(this).parent().append($Li);
        });
        $(document).on("click",".add-dom",function() {
            $(this).siblings('ul').prepend($Li);
        });
        $(document).on("click",".del-dom",function() {
            $(this).parent().remove();
        })
        $(document).on("click",".add-val",function() {
            $(this).siblings('ul').append($Textarea);
        });
    });
</script>
<script>
    $(function () {
        var json = [];
        var ul1 = $('.level1>li>input');
        for(var i=0;i<ul1.length;i++){
            var topLevel = {
                name : ul1.eq(i).val(),
                item : []
            };
                var levelTwo = ul1.eq(i).parent().find('.level2>li>input');
                var levelTwoValue = ul1.eq(i).parent().find('.level3>li>textarea');
                var levelTwoCheck = ul1.eq(i).parent().find('.level3>li>label>input[type="checkbox"]')
            for(var j=0;j<levelTwo.length;j++) {
                topLevel.item.push({
                    name: levelTwo.eq(j).val(),
                    value:levelTwoValue.eq(j).text(),
                    check:levelTwoCheck.eq(j).prop('checked'),
                    item: []
                });
                var levelThree = levelTwo.eq(j).parent().find('.level3>li>input');
                var levelThreeValue = levelTwo.eq(j).parent().find('.level4>li>textarea');
                var levelThreeCheck = levelTwo.eq(j).parent().find('.level4>li>label>input[type="checkbox"]');

                for(var k=0;k<levelThree.length;k++){
                    topLevel.item[j].item.push({
                        name: levelThree.eq(k).val(),
                        value:levelThreeValue.eq(k).text(),
                        check:levelThreeCheck.eq(k).prop('checked'),
                        item: []
                    });
                }
            }

            json.push(topLevel);
        }


        var _dom = getFirstElementByName('<?= $model->tablename ?>[<?= $modelField->field ?>]');
        _dom.value = JSON.stringify(json);
        $('.aaa').html(JSON.stringify(json));
    })

</script>