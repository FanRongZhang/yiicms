<?php
/* @var $aryFieldValueType  \common\models\Field\FieldValueType[] */
/* @var $theFieldValueType \common\models\Field\FieldValueType */
/* @var $contentModel \common\models\Model */
?>


<script>
    var changeFieldvaluetype = function (fieldValueType) {
        $.ajax({
            url : "/contentmodel/add-new-field",
            data : {
                modelid : <?= $contentModel->id ?> ,
                fieldvaluetype : fieldValueType
            },
            success : function(res){
                fieldValueType = eval("("+fieldValueType+")");
                currentFieldValueType = fieldValueType;
                applyFieldValueTypeSetting(fieldValueType);
                $("#main").html(res);
            }
        });
    }
</script>


<div id="main">
<form method="post" onsubmit="return beforeSubmit()" id="form1">
    <table class="table table-bordered my-table1">
        <tbody>

            <tr>
                <th><strong>字段类型</strong></th>
                <td>
                    <select name="info[fieldvaluetype]" onchange="changeFieldvaluetype($(this).val())" >
                        <?php
                        foreach ($aryFieldValueType as $oneType):
                        ?>
                        <option value="<?= $oneType->name ?>" <?= $oneType->name == $theFieldValueType->name ? 'selected' : '' ?> ><?= $oneType->nickname ?></option>
                        <?php
                        endforeach;
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <th><strong>显示在列表中</strong></th>
                <td>
                    <label><input type="radio" name="info[isshowinlist]" value="0"> 否</label>
                    <label><input type="radio" name="info[isshowinlist]" value="1"> 是</label>
                </td>
            </tr>

            <tr>
                <th>
                    <strong><span style="color: red;">*</span>字段名</strong>
                    <br>
                    只能由英文字母、数字和下划线组成，并且仅能字母开头，不以下划线结尾
                </th>
                <td>
                    <input name="info[field]" type="text"/>
                </td>
            </tr>

            <tr>
                <th>
                    <strong><span style="color: red;">*</span>字段别名</strong>
                    <br>例如：文章标题
                </th>
                <td>
                    <input name="info[name]" type="text"/>
                </td>
            </tr>

            <tr>
                <th><strong>字段提示</strong></th>
                <td>
                    <input type="text" name="info[tips]"  class="input-text"/>
                </td>
            </tr>

            <tr>
                <th><strong>相关参数</strong></th>
                <td id="setting"><?= $theFieldValueType->settingUI() ?></td>
            </tr>

            <tr id="formattribute">
                <th><strong>表单附加属性</strong><br />可以通过此处加入javascript事件</th>
                <td><input type="text" name="info[formattribute]"  class="input-text"></td>
            </tr>

            <tr id="css">
                <th><strong>表单样式名</strong><br />定义表单的CSS样式名</th>
                <td><input type="text" name="info[css]" value="" size="10" class="input-text"></td>
            </tr>

            <tr>
                <th><strong>字符长度取值范围</strong><br />系统将在表单提交时检测数据长度范围是否符合要求，如果不想限制长度请留空</th>
                <td>最小值：<input type="text" name="info[minlength]" id="field_minlength" value="0" > 最大值：<input type="text" name="info[maxlength]" id="field_maxlength" value="0" ></td>
            </tr>
            <tr>
                <th><strong>数据校验正则</strong><br />系统将通过此正则校验表单提交的数据合法性，如果不想校验数据请留空</th>
                <td><input type="text" name="info[pattern]" id="pattern" value="" >
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
                <td><input type="text" name="info[errortips]" value="" class="input-text"></td>
            </tr>
            <tr>
                <th><strong>值唯一</strong></th>
                <td>
                    <label><input type="radio" name="info[isunique]" value="0" checked> 否</label>
                    <label><input type="radio" name="info[isunique]" value="1"> 是</label>
                </td>
            </tr>
            <tr>
                <th><strong>作为基本信息</strong><br />基本信息将在添加页面左侧显示</th>
                <td>
                    <label><input type="radio" name="info[isbase]" value="0"> 否</label>
                    <label><input type="radio" name="info[isbase]" value="1" checked> 是</label>
                </td>
            </tr>
            <tr>
                <th><strong>作为搜索条件</strong></th>
                <td>
                    <label><input type="radio" name="info[issearch]" value="0"> 否</label>
                    <label><input type="radio" name="info[issearch]" value="1"> 是</label>
                </td>
            </tr>
            <tr>
                <th><strong>是否模糊查询</strong></th>
                <td>
                    <label><input type="radio" name="info[issearchinlikestyle]" value="0" checked> 否</label>
                    <label><input type="radio" name="info[issearchinlikestyle]" value="1"> 是</label>
                </td>
            </tr>
            <tr>
                <th><strong>作为全站搜索信息</strong></th>
                <td>
                    <label><input type="radio" name="info[isfulltext]"  value="0"> 否</label>
                    <label><input type="radio" name="info[isfulltext]"  value="1"> 是</label>
                </td>
            </tr>
            <tr>
                <th><strong>是否可不填：</strong></th>
                <td>
                    <label><input type="radio" name="info[canempty]"  value="0" checked> 否</label>
                    <label><input type="radio" name="info[canempty]"  value="1"> 是</label>
                </td>
            </tr>

        </tbody>
    </table>
    <div class="fixed-bottom-btn">
        <input name="info[modelid]" type="hidden" value="<?= $contentModel->id ?>">
        <a href="javascript:void(0);"  name="dosubmit"  class="btn btn-success form-sub" onclick="form1.submit()"><span class="glyphicon glyphicon-plus"></span> 提交</a >
    </div>
</form>
</div>

<script>
    var currentFieldValueType = null;
    <?php
    foreach ($aryFieldValueType as $oneType):
    ?>
    var <?= $oneType->name ?> = <?= json_encode($oneType) ?>;
    if(!currentFieldValueType){
        currentFieldValueType = <?= $oneType->name ?>;
    }
    <?php
    endforeach;
    ?>

    var applyFieldValueTypeSetting = function ( setting ) {
        console.log('call apply....setting');
        if(setting.allowFulltext==true){
            $("input[name='info[isfulltext]']").eq(1).prop('checked',true);
        }else{
            $("input[name='info[isfulltext]']").eq(0).prop('checked',true);
            $("input[name='info[isfulltext]']").prop("disabled",true)
        }
        if(setting.allowSearch==true){
            $("input[name='info[issearch]']").eq(1).prop('checked',true);
        }else{
            $("input[name='info[issearch]']").eq(0).prop('checked',true);
        }
        if(setting.allowIsunique==true){
            $("input[name='info[isunique]']").eq(1).prop('checked',true);
        }else{
            $("input[name='info[isunique]']").eq(0).prop('checked',true);
        }
    }
</script>