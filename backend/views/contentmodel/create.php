

<div class="wrapper-header"><h1>新建内容模型</h1></div>
<form method="post" id="form1">
    <table class="my-table special">
        <tbody>
            <tr>
                <th>模型名称：</th>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <th>表名称：</th>
                <td>
                    <input type="text" name="tablename">
                </td>
            </tr>
            <tr>
                <th>是否作为资讯类型的模型而启用全文搜索</th>
                <td>
                    <label><input type="radio" name="enablearticlefulltextsearch" value="1" checked> 是</label>
                    <label><input type="radio" name="enablearticlefulltextsearch" value="0"> 否</label>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                  <a href="javascript:void(0);" class="btn btn-success form-sub" onclick="form1.submit()"><span class="glyphicon glyphicon-plus"></span> 创建</a >
                </td>
            </tr>
        </tbody>
    </table>
</form>