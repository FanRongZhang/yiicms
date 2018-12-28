<?php
/* @var $theFieldValueType \common\models\Field\FieldValueType */
/* @var $contentModel \common\models\Model */
/* @var $modelField \common\models\Modelfield */
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
        <a href="/contentmodel/list"  class="active">内容模型</a>
        <a href="/category/list">网站分类</a>
        <a href="/sitesetting/exam-type">考试模型</a>
    </div>

<form method="post" onsubmit="return beforeSubmit()" id="form1">
    <input type="hidden" name="info[id]" value="<?= $modelField->id ?>" >
    <table class="table table-bordered my-table1">
        <tbody>
            <tr>
                <th><strong>字段类型</strong></th>
                <td>
                    <?= $theFieldValueType->nickname ?>
                </td>
            </tr>
            <tr>
                <th><strong>显示在列表中</strong></th>
                <td>
                    <label><input type="radio" name="info[isshowinlist]" value="0" <?= $modelField->isshowinlist ? '' : 'checked' ?>> 否</label>
                    <label><input type="radio" name="info[isshowinlist]" value="1" <?= $modelField->isshowinlist ? 'checked' : '' ?>> 是</label>
                </td>
            </tr>
            <tr>
                <th>
                    <strong><span style="color: red;">*</span>字段名</strong>
                    <br>
                    只能由英文字母、数字和下划线组成，并且仅能字母开头，不以下划线结尾
                </th>
                <td>
                    <?= $modelField->field ?>
                </td>
            </tr>
            <tr>
                <th>
                    <strong><span style="color: red;">*</span>字段别名</strong>
                    <br>例如：文章标题
                </th>
                <td>
                    <input name="info[name]" type="text" value="<?= $modelField->name ?>"  />
                </td>
            </tr>
            <tr>
                <th><strong>字段提示</strong></th>
                <td>
                    <textarea name="info[tips]" rows="5" style="height: 80px"> <?= $modelField->tips ?> </textarea>
                </td>
            </tr>
            <tr>
                <th><strong>相关参数</strong></th>
                <td>
                    <?php
                    //var_dump(json_decode($modelField->setting,true));exit;
                    ?>
                    <?= $theFieldValueType->settingUI(json_decode($modelField->setting,true)) ?>
                </td>
            </tr>
            <tr id="formattribute">
                <th><strong>表单附加属性</strong><br />可以通过此处加入javascript事件</th>
                <td><input type="text" name="info[formattribute]" value=" <?= $modelField->formattribute ?> "></td>
            </tr>
            <tr id="css">
                <th><strong>表单样式名</strong><br />定义表单的CSS样式名</th>
                <td><input type="text" name="info[css]" value=" <?= $modelField->css ?> " size="10" class="input-text"></td>
            </tr>

            <tr>
                <th><strong>字符长度取值范围</strong><br />系统将在表单提交时检测数据长度范围是否符合要求，如果不想限制长度请留空</th>
                <td>
                    最小值：<input type="text" name="info[minlength]" id="field_minlength" value=" <?= $modelField->minlength ?> " size="5" >
                    最大值：<input type="text" name="info[maxlength]" id="field_maxlength" value=" <?= $modelField->maxlength ?> " size="5" >
                </td>
            </tr>
            <tr>
                <th><strong>数据校验正则</strong><br />系统将通过此正则校验表单提交的数据合法性，如果不想校验数据请留空</th>
                <td><input type="text" name="info[pattern]" id="pattern" value=" <?= $modelField->pattern ?> " size="40" class="input-text">
                    <select name="pattern_select" onchange="javascript:$('#pattern').val(this.value)">
                        <option value="">常用正则</option>
                        <option value="/^[0-9.-]+$/">数字</option>
                        <option value="/^[0-9-]+$/">整数</option>
                        <option value="/^[a-z]+$/i">字母</option>
                        <option value="/^[0-9a-z]+$/i">数字+字母</option>
                        <option value="/^[\w\-\.]+@[\w\-\.]+(\.\w+)+$/">E-mail</option>
                        <option value="/^[0-9]{5,20}$/">QQ</option>
                        <option value="/^http:\/\//">超级链接</option>
                        <option value="/^(1)[0-9]{10}$/">手机号码</option>
                        <option value="/^[0-9-]{6,13}$/">电话号码</option>
                        <option value="/^[0-9]{6}$/">邮政编码</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th><strong>数据校验未通过的提示信息</strong></th>
                <td><input type="text" name="info[errortips]" value=" <?= $modelField->errortips ?> " size="50" class="input-text"></td>
            </tr>
            <tr>
                <th><strong>值唯一</strong></th>
                <td>
                    <label><input type="radio" name="info[isbase]" value="0" <?= $modelField->isunique ? '' : 'checked' ?> > 否</label>
                    <label><input type="radio" name="info[isbase]" value="1" <?= $modelField->isunique ? 'checked' : '' ?> > 是</label>
                </td>
            </tr>
            <tr style="display: none">
                <th><strong>作为基本信息</strong><br />基本信息将在添加页面左侧显示</th>
                <td>
                        <label><input type="radio" name="info[issearch]" value="0" > 否</label>
                        <label><input type="radio" name="info[issearch]" value="1" checked > 是</label>
                </td>
            </tr>
            <tr>
                <th><strong>作为搜索条件</strong></th>
                <td>
                    <label><input type="radio" name="info[issearch]" value="0" <?= $modelField->issearch ? '' : 'checked' ?> > 否</label>
                    <label><input type="radio" name="info[issearch]" value="1" <?= $modelField->issearch ? 'checked' : '' ?> > 是</label>
                </td>
            </tr>
            <tr>
                <th><strong>是否模糊查询</strong></th>
                <td>
                    <label><input type="radio" name="info[issearchinlikestyle]" value="0" <?= $modelField->issearchinlikestyle ? '' : 'checked' ?>> 否</label>
                    <label><input type="radio" name="info[issearchinlikestyle]" value="1" <?= $modelField->issearchinlikestyle ? 'checked' : '' ?>> 是</label>
                </td>
            </tr>
            <tr>
                <th><strong>作为全站搜索信息</strong></th>
                <td>
                    <label><input type="radio" name="info[isfulltext]" value="0" <?= $modelField->isfulltext ? '' : 'checked' ?> > 否</label>
                    <label><input type="radio" name="info[isfulltext]" value="1" <?= $modelField->isfulltext ? 'checked' : '' ?> > 是</label>
                </td>
            </tr>
            <tr>
                <th><strong>在推荐位标签中调用</strong></th>
                <td>
                    <label><input type="radio" name="info[isposition]" value="0" <?= $modelField->isposition ? '' : 'checked' ?> > 否</label>
                    <label><input type="radio" name="info[isposition]" value="1" <?= $modelField->isposition ? 'checked' : '' ?> > 是</label>
                </td>
            </tr>
            <tr style="display: none">
                <th><strong>禁止设置字段值的角色</strong></th>
                <td>
                    <label class="ib" style="width:100px"><input type="checkbox" name="unsetroleids[]" id="unsetroleids" id="_1"  value="1"> 超级管理员</label>
                    <label class="ib" style="width:100px"><input type="checkbox" name="unsetroleids[]" id="unsetroleids" id="_2"  value="2"> 站点管理员</label>
                    <label class="ib" style="width:100px"><input type="checkbox" name="unsetroleids[]" id="unsetroleids" id="_3"  value="3"> 运营总监</label>
                    <label class="ib" style="width:100px"><input type="checkbox" name="unsetroleids[]" id="unsetroleids" id="_4"  value="4"> 总编</label>
                    <label class="ib" style="width:100px"><input type="checkbox" name="unsetroleids[]" id="unsetroleids" id="_5"  value="5"> 编辑</label>
                    <label class="ib" style="width:100px"><input type="checkbox" name="unsetroleids[]" id="unsetroleids" id="_6"  value="7"> 发布人员</label>
                </td>
            </tr>
            <tr>
                <th><strong>是否不可填</strong></th>
                <td>
                    <label><input type="radio" name="info[canempty]"  value="0" <?= $modelField->canempty ? '' : 'checked' ?> > 否</label>
                    <label><input type="radio" name="info[canempty]"  value="1" <?= $modelField->canempty ? 'checked' : '' ?> > 是</label>
                </td>
            </tr>

        </tbody>
    </table>
    <div class="fixed-bottom-btn">
        <input name="info[modelid]" type="hidden" value="<?= $contentModel->id ?>">
        <a href="javascript:void(0);"  name="dosubmit"  class="btn btn-success form-sub" onclick="form1.submit()"><span class="glyphicon glyphicon-plus"></span> 提交</a >

    </div>
</form>
