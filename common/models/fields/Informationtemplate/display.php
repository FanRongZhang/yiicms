<?php
/* @var $model \common\models\Model */
/* @var $modelField \common\models\Modelfield */
/* @var $aryUISetting array */
/* @var $value string */
?>
<script type="text/javascript" src="/js/ddsort.js"></script>
<style>
    .level1,.level1 ul {display: flex;flex-direction: column;justify-content: center;flex: auto;}
    .level1 li,.level1 ul li {display: flex;flex-direction: row;justify-content: space-between;align-items: center;flex: auto;border: 1px solid #ccc;padding: 0 0 0 5px;margin: 0 0 -1px -1px; cursor: move}
    ul.level1 li input[type="text"]{width: auto;min-width: 100px;}
    li:last-child{border-bottom: none;}
    .level1 {border-bottom:1px solid #ccc; }
    ul.level1 li textarea {width: 100%;height: 50px;}
    .add-dom {margin-left: 5px;}
    .del-dom {margin-left: 5px;}
    .add-val {margin: 0 5px;}
    a.btn-xs {height: auto}
</style>


<script src="/js/template-web.js"></script>

<input type="hidden" name="<?= $model->tablename ?>[<?= $modelField->field ?>]" />


<?php
if(!$value):
?>
<ul class="level1">
    <a class="delate-all-dom btn btn-xs btn-danger" title="删除所有"><span class="glyphicon glyphicon-trash"></span> 删除所有名称</a>
    <li>
        <input type="text" placeholder="元素大类" value="重要信息" />
        <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>
        <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>
        <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>
        <ul class="level2">
            <li>
                <input type="text" value="公示期" placeholder="二级子名称，无可留空"/>
                <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>
                <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>
                <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>
                <ul class="level3">

                            <li>
                                <textarea></textarea>
                            </li>
                            <li>
                                <label><input type="checkbox" value="1" /> 在搜索列表显示</label>
                            </li>
                </ul>
            </li>
            <li>
                <input type="text" value="受理地点" placeholder="二级子名称，无可留空"/>
                <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>
                <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>
                <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>
                <ul class="level3">

                    <li>
                        <textarea></textarea>
                    </li>
                    <li>
                        <label><input type="checkbox" value="1" /> 在搜索列表显示</label>
                    </li>
                </ul>
            </li>
            <li>
                <input type="text" value="通讯地址（邮编）" placeholder="二级子名称，无可留空"/>
                <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>
                <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>
                <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>
                <ul class="level3">

                    <li>
                        <textarea></textarea>
                    </li>
                    <li>
                        <label><input type="checkbox" value="1" /> 在搜索列表显示</label>
                    </li>
                </ul>
            </li>
            <li>
                <input type="text" value="电话" placeholder="二级子名称，无可留空"/>
                <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>
                <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>
                <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>
                <ul class="level3">

                    <li>
                        <textarea></textarea>
                    </li>
                    <li>
                        <label><input type="checkbox" value="1" /> 在搜索列表显示</label>
                    </li>
                </ul>
            </li>
            <li>
                <input type="text" value="联系人" placeholder="二级子名称，无可留空"/>
                <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>
                <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>
                <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>
                <ul class="level3">

                    <li>
                        <textarea></textarea>
                    </li>
                    <li>
                        <label><input type="checkbox" value="1" /> 在搜索列表显示</label>
                    </li>
                </ul>
            </li>
            <li>
                <input type="text" value="公示要求" placeholder="二级子名称，无可留空"/>
                <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>
                <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>
                <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>
                <ul class="level3">

                    <li>
                        <textarea></textarea>
                    </li>
                    <li>
                        <label><input type="checkbox" value="1" /> 在搜索列表显示</label>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <a class="add-top-dom btn btn-xs btn-success" title="添加顶级"><span class="glyphicon glyphicon-plus"></span> 添加顶级名称</a>
</ul>

<!--<ul class="level1">-->
<!--    <a class="delate-all-dom btn btn-xs btn-danger" title="删除所有"><span class="glyphicon glyphicon-trash"></span> 删除所有名称</a>-->
<!--    <li>-->
<!--        <input type="text" placeholder="元素大类" value="重要时间节点" />-->
<!--        <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>-->
<!--        <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>-->
<!--        <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>-->
<!--        <ul class="level2">-->
<!--            <li>-->
<!--                <input type="text" value="报名" placeholder="二级子名称，无可留空"/>-->
<!--                <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>-->
<!--                <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>-->
<!--                <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>-->
<!--                <ul class="level3">-->
<!--                    <li>-->
<!--                        <input type="text" value="报名开始" placeholder="数据项目名称"/>-->
<!--                        <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>-->
<!--                        <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>-->
<!--                        <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>-->
<!--                        <ul class="level4">-->
<!--                            <li>-->
<!--                                <textarea></textarea>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <label><input type="checkbox" value="1" /> 在搜索列表显示</label>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <input type="text" value="报名截至" placeholder="数据项目名称"/>-->
<!--                        <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>-->
<!--                        <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>-->
<!--                        <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>-->
<!--                        <ul class="level4">-->
<!--                            <li>-->
<!--                                <textarea></textarea>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <label><input type="checkbox" value="1" /> 在搜索列表显示</label>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <input type="text" value="查询资格审查结果" placeholder="数据项目名称"/>-->
<!--                        <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>-->
<!--                        <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>-->
<!--                        <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>-->
<!--                        <ul class="level4">-->
<!--                            <li>-->
<!--                                <textarea></textarea>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <label><input type="checkbox" value="1" /> 在搜索列表显示</label>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <input type="text" value="审查不通过改报" placeholder="数据项目名称"/>-->
<!--                        <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>-->
<!--                        <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>-->
<!--                        <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>-->
<!--                        <ul class="level4">-->
<!--                            <li>-->
<!--                                <textarea></textarea>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <label><input type="checkbox" value="1" /> 在搜索列表显示</label>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <input type="text" value="确认缴费" placeholder="数据项目名称"/>-->
<!--                        <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>-->
<!--                        <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>-->
<!--                        <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>-->
<!--                        <ul class="level4">-->
<!--                            <li>-->
<!--                                <textarea></textarea>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <label><input type="checkbox" value="1" /> 在搜索列表显示</label>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <input type="text" value="打印准考证" placeholder="数据项目名称"/>-->
<!--                        <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>-->
<!--                        <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>-->
<!--                        <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>-->
<!--                        <ul class="level4">-->
<!--                            <li>-->
<!--                                <textarea></textarea>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <label><input type="checkbox" value="1" /> 在搜索列表显示</label>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </li>-->
<!--            <li>-->
<!--                <input type="text" value="考试" placeholder="二级子名称，无可留空"/>-->
<!--                <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>-->
<!--                <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>-->
<!--                <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>-->
<!--                <ul class="level3">-->
<!--                    <li>-->
<!--                        <input type="text" value="笔试" placeholder="数据项目名称"/>-->
<!--                        <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>-->
<!--                        <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>-->
<!--                        <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>-->
<!--                        <ul class="level4">-->
<!--                            <li>-->
<!--                                <textarea></textarea>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <label><input type="checkbox" value="1" /> 在搜索列表显示</label>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <input type="text" value="成绩查询" placeholder="数据项目名称"/>-->
<!--                        <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>-->
<!--                        <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>-->
<!--                        <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>-->
<!--                        <ul class="level4">-->
<!--                            <li>-->
<!--                                <textarea></textarea>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <label><input type="checkbox" value="1" /> 在搜索列表显示</label>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <input type="text" value="面试" placeholder="数据项目名称"/>-->
<!--                        <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>-->
<!--                        <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>-->
<!--                        <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>-->
<!--                        <ul class="level4">-->
<!--                            <li>-->
<!--                                <textarea></textarea>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <label><input type="checkbox" value="1" /> 在搜索列表显示</label>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </li>-->
<!--        </ul>-->
<!--    </li>-->
<!--    <li>-->
<!--        <input type="text" placeholder="元素大类" value="重要网址链接" />-->
<!--        <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>-->
<!--        <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>-->
<!--        <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>-->
<!--        <ul class="level2">-->
<!--            <li>-->
<!--                <input type="text" value="报名" placeholder="二级子名称，无可留空"/>-->
<!--                <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>-->
<!--                <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>-->
<!--                <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>-->
<!--                <ul class="level3">-->
<!--                    <li>-->
<!--                        <textarea></textarea>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <label><input type="checkbox" value="1" /> 在搜索列表显示</label>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </li>-->
<!--            <li>-->
<!--                <input type="text" value="成绩查询" placeholder="二级子名称，无可留空"/>-->
<!--                <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>-->
<!--                <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>-->
<!--                <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>-->
<!--                <ul class="level3">-->
<!--                    <li>-->
<!--                        <textarea></textarea>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <label><input type="checkbox" value="1" /> 在搜索列表显示</label>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </li>-->
<!--        </ul>-->
<!--    </li>-->
<!--    <li>-->
<!--        <input type="text" placeholder="元素大类" value="考试大纲" />-->
<!--        <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>-->
<!--        <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>-->
<!--        <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>-->
<!--        <ul class="level2">-->
<!--            <li>-->
<!--                <input type="text" value="笔试" placeholder="二级子名称，无可留空"/>-->
<!--                <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>-->
<!--                <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>-->
<!--                <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>-->
<!--                <ul class="level3">-->
<!--                    <li>-->
<!--                        <textarea></textarea>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <label><input type="checkbox" value="1" /> 在搜索列表显示</label>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </li>-->
<!--            <li>-->
<!--                <input type="text" value="非通用语职位" placeholder="二级子名称，无可留空"/>-->
<!--                <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>-->
<!--                <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>-->
<!--                <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>-->
<!--                <ul class="level3">-->
<!--                    <li>-->
<!--                        <input type="text" value="日语" placeholder="二级子名称，无可留空"/>-->
<!--                        <ul class="level4">-->
<!--                            <li>-->
<!--                                <textarea></textarea>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <label><input type="checkbox" value="1" /> 在搜索列表显示</label>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <input type="text" value="法语" placeholder="二级子名称，无可留空"/>-->
<!--                        <ul class="level4">-->
<!--                            <li>-->
<!--                                <textarea></textarea>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <label><input type="checkbox" value="1" /> 在搜索列表显示</label>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <input type="text" value="西班牙语" placeholder="二级子名称，无可留空"/>-->
<!--                        <ul class="level4">-->
<!--                            <li>-->
<!--                                <textarea></textarea>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <label><input type="checkbox" value="1" /> 在搜索列表显示</label>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </li>-->
<!--            <li>-->
<!--                <input type="text" value="中国银监会" placeholder="二级子名称，无可留空"/>-->
<!--                <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>-->
<!--                <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>-->
<!--                <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>-->
<!--                <ul class="level3">-->
<!--                    <li>-->
<!--                        <textarea></textarea>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <label><input type="checkbox" value="1" /> 在搜索列表显示</label>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </li>-->
<!--            <li>-->
<!--                <input type="text" value="中国证监会" placeholder="二级子名称，无可留空"/>-->
<!--                <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>-->
<!--                <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>-->
<!--                <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>-->
<!--                <ul class="level3">-->
<!--                    <li>-->
<!--                        <textarea></textarea>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <label><input type="checkbox" value="1" /> 在搜索列表显示</label>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </li>-->
<!--        </ul>-->
<!--    </li>-->
<!--    <li>-->
<!--        <input type="text" placeholder="" value="报考条件" />-->
<!--        <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>-->
<!--        <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>-->
<!--        <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>-->
<!--        <ul class="level2">-->
<!--            <li>-->
<!--                <input type="text" value="招录对象" placeholder="二级子名称，无可留空"/>-->
<!--                <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>-->
<!--                <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>-->
<!--                <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>-->
<!--                <ul class="level3">-->
<!--                    <li>-->
<!--                        <textarea></textarea>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <label><input type="checkbox" value="1" /> 在搜索列表显示</label>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </li>-->
<!--            <li>-->
<!--                <input type="text" value="报考条件" placeholder="二级子名称，无可留空"/>-->
<!--                <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>-->
<!--                <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>-->
<!--                <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>-->
<!--                <ul class="level3">-->
<!--                    <li>-->
<!--                        <textarea></textarea>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <label><input type="checkbox" value="1" /> 在搜索列表显示</label>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </li>-->
<!--            <li>-->
<!--                <input type="text" value="不得报考" placeholder="二级子名称，无可留空"/>-->
<!--                <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>-->
<!--                <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>-->
<!--                <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>-->
<!--                <ul class="level3">-->
<!--                    <li>-->
<!--                        <textarea></textarea>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <label><input type="checkbox" value="1" /> 在搜索列表显示</label>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </li>-->
<!--        </ul>-->
<!--    </li>-->
<!--    <li>-->
<!--        <input type="text" placeholder="" value="咨询电话" />-->
<!--        <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>-->
<!--        <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>-->
<!--        <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>-->
<!--        <ul class="level2">-->
<!--            <li>-->
<!--                <input type="text" value="湖北" placeholder="二级子名称，无可留空" />-->
<!--                <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>-->
<!--                <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>-->
<!--                <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>-->
<!--                <ul class="level3">-->
<!--                    <li>-->
<!--                        <textarea></textarea>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <label><input type="checkbox" value="1" /> 在搜索列表显示</label>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </li>-->
<!--            <li>-->
<!--                <input type="text" value="中国银监会" placeholder="二级子名称，无可留空" />-->
<!--                <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>-->
<!--                <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>-->
<!--                <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>-->
<!--                <ul class="level3">-->
<!--                    <li>-->
<!--                        <textarea></textarea>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <label><input type="checkbox" value="1" /> 在搜索列表显示</label>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </li>-->
<!--            <li>-->
<!--                <input type="text" value="中国证监会" placeholder="二级子名称，无可留空" />-->
<!--                <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>-->
<!--                <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>-->
<!--                <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>-->
<!--                <ul class="level3">-->
<!--                    <li>-->
<!--                        <textarea></textarea>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <label><input type="checkbox" value="1" /> 在搜索列表显示</label>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </li>-->
<!--        </ul>-->
<!--    </li>-->
<!--    <a class="add-top-dom btn btn-xs btn-success" title="添加顶级"><span class="glyphicon glyphicon-plus"></span> 添加顶级名称</a>-->
<!--</ul>-->
<?php
else:
?>
    <ul class="level1" id="container"></ul>
    <script id="test" type="text/html">
        <a class="add-top-dom btn btn-xs btn-success" title="添加顶级"><span class="glyphicon glyphicon-plus"></span> 添加顶级名称</a>
        {{each content val1 key1}}
        <li>
            <input type="text" placeholder="元素大类" value="{{val1.name}}" />
            <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>
            <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>
            <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>
            <ul class="level2">
                {{each val1.item val2}}
                <li>
                    <input type="text" value="{{val2.name}}" placeholder="二级子名称，无可留空"/>
                    <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>
                    <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>
                    <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>
                    <ul class="level3">
                        {{each val2.item val3}}
                        <li>
                            <input type="text" value="{{val3.name}}" placeholder="数据项目名称"/>
                            <a class="add-dom btn btn-xs btn-success" title="添加子名称"><span class="glyphicon glyphicon-plus"></span></a>
                            <a class="del-dom btn btn-xs btn-danger" title="删除"><span class="glyphicon glyphicon-trash"></span></a>
                            <a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a>
                            <ul class="level4">
                                <li>
                                    <textarea>{{val3.value}}</textarea>
                                </li>
                                <li>
                                    <label><input type="checkbox" value="1" {{if val3.check}}checked{{/if}}/> 在搜索列表显示</label>
                                </li>
                            </ul>
                        </li>
                        {{/each}}
                        {{if typeof(val2.value)!="undefined"}}
                        <li>
                            <textarea>{{val2.value}}</textarea>
                        </li>
                        <li>
                            <label><input type="checkbox" value="1" {{if val2.check}}checked{{/if}}/> 在搜索列表显示</label>
                        </li>
                        {{/if}}
                    </ul>
                </li>
                {{/each}}
            </ul>
        </li>
        {{/each}}
    </script>
<script>
    var info1 = eval(<?= $value ?>);
    var data = {
        content: info1
    }
    var html = template('test',data);
    document.getElementById("container").innerHTML = html;

</script>


<?php
endif;
?>
<!-- 一个大的信息项 -->
<div class="aaa"></div>

<script>
    $(function() {
        $Li = '<li><input type="text" value="" placeholder="请填写......"/><a class="add-dom btn btn-xs btn-success"><span class="glyphicon glyphicon-plus"></span></a> <a class="del-dom btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span></a><a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a><ul class="level2"><ul></li>'
        $Textarea = '<li><textarea></textarea></li><li><label><input type="checkbox" value="1" /> 在搜索列表显示</label></li>'
        $('.level1').on('mousedown mousemove mouseup','#container .add-dom,#container .add-val,#container .del-dom,#container .add-dom span,#container .add-val span,#container .del-dom span',function (e) {
            e.stopPropagation();
        })
//        $('#container .add-dom,#container .add-val,#container .del-dom,#container .add-dom span,#container .add-val span,#container .del-dom span').mousedown(function (e) {
//            e.stopPropagation();
//        })

        $('#container').off('click',".add-top-dom").on("click",".add-top-dom",function(e) {
            e.stopPropagation();
            $(this).after($Li);
        });
        $('#container').off('click',".delate-all-dom").on("click",".delate-all-dom",function(e) {
            e.stopPropagation();
            $(this).parents('.level1').children('li').remove();
        });
        $('#container').off('click',".add-dom").on("click",".add-dom",function(e) {
           e.stopPropagation();
            var level = $(this).parent().parent().attr('class');
            levelnum = level.substr(level.length-1,1);
            levelnum++;
            levelnum++;
            level = 'level'+levelnum;
            $(this).siblings('ul').append('<li><input type="text" value="" placeholder="请填写......"/><a class="add-dom btn btn-xs btn-success"><span class="glyphicon glyphicon-plus"></span></a> <a class="del-dom btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span></a><a class="add-val btn btn-xs btn-primary" title="添加子内容"><span class="glyphicon glyphicon-paperclip"></span></a><ul class='+level+'><ul></li>');
        });
        $('#container').off('click',".del-dom").on("click",".del-dom",function(e) {
            e.stopPropagation();
            $(this).parent().remove();
        })
        $('#container').off('click',".add-val").on("click",".add-val",function(e) {
            e.stopPropagation();
            $(this).siblings('ul').append($Textarea);
        });
    })


    function info(){
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
                    value: levelTwoValue.eq(j).val(),
                    check: levelTwoCheck.eq(j).prop('checked'),
                    item: []
                });
                var levelThree = levelTwo.eq(j).parent().find('.level3>li>input');
                var levelThreeValue = levelTwo.eq(j).parent().find('.level4>li>textarea');
                var levelThreeCheck = levelTwo.eq(j).parent().find('.level4>li>label>input[type="checkbox"]');

                for(var k=0;k<levelThree.length;k++){
                    topLevel.item[j].item.push({
                        name: levelThree.eq(k).val(),
                        value: levelThreeValue.eq(k).val(),
                        check: levelThreeCheck.eq(k).prop('checked'),
                        item: []
                    });
                }
            }

            json.push(topLevel);
        }
        return json;
    }


    $(function(){
        $( '#container' ).DDSort({
            target: 'li',//拖拽的目标元素，默认即'li'
            floatStyle: {           //拖拽元素的样式，默认有一定的样式
                'border': '1px dotted #ccc'
            }
        });

        pushFuncToSubmitAction(function(){
            var _dom = getFirstElementByName('<?= $model->tablename ?>[<?= $modelField->field ?>]');
            if(_dom) {
                $(_dom).val(JSON.stringify(info()));
                console.log('got it:'+$(_dom).val());
            }else{
                console.log('dom is not exists');
            }
            return true;
        })
    })

</script>