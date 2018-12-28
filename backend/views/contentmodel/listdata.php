<?php
/* @var $category  \common\models\Articlecategory */
/* @var $this \yii\web\View */
/* @var $model \common\models\Model */
/* @var $fields \common\models\Modelfield[] */
/* @var $pages \yii\data\Pagination */

?>
<nav class="breadcrumb">
    <i class="Hui-iconfont">&#xe67f;</i>
    <a href="#"> 首页</a>
    <span class="c-gray en">&gt;</span>
    <a href="#">系统管理</a>
    <span class="c-gray en">&gt;</span>
    <a href="">基本设置</a>
    <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="wrapper-header"><h1><?= $model->name ?>表的记录查看</h1></div>
<div class="page-container">
<form class="listdata-form" id="searchForm">
    <div class="wrapper-con">
        <input type="hidden" name="categoryid" value="<?= $category->id ?>" />
                <?php
                foreach ($fields as $oneField) {
                    if( $oneField->issearch == 0 )
                    {
                        continue;
                    }
                    $arySetting = json_decode(trim($oneField->setting),true);
                    if(!$arySetting){
                        $arySetting = [];
                    }
                    ?>
                    <div class="wrapper-item">
                        <span><?= $oneField->name ?></span>

                        <?php
                            if(
                                $oneField->fieldvaluetype == \app\services\FieldValueTypeService::TYPE_CONTENT
                                ||  $oneField->fieldvaluetype == \app\services\FieldValueTypeService::TYPE_EDITOR
                                ||  $oneField->fieldvaluetype == \app\services\FieldValueTypeService::TYPE_TEXTAREA
                                ||  $oneField->fieldvaluetype == \app\services\FieldValueTypeService::TYPE_SUMMARY
                            ){
                        ?>

                        <input type="text" class="my-search" name="<?= $model->tablename ?>[<?= $oneField->field ?>]"/>

                        <?php
                            }else{
                         ?>
                            <?= \app\services\FieldValueTypeService::getTheType($oneField->fieldvaluetype)->display($model, $oneField , $arySetting) ?>
                        <?php
                            }
                        ?>
                    </div>
                    <?php
                }
                ?>
        <div class="wrapper-item" style="width: auto">
            <a href="#" class="btn btn-success" onclick="searchForm.submit()"><span class="glyphicon glyphicon-search"></span> 查询</a>
        </div>
    </div>

</form>

<script>
    var addToTuiJianChi = function ($id) {
        $.ajax({
            url:'/tuijianpool/addarticle?articleid='+$id,
            success:function ($data) {
                if($data.code == 0){
                    alert('操作成功');
                }else{
                    alert($data.msg);
                }
            }
        });
    }
</script>

<table class="my-table">
    <tbody>
        <tr>
            <th>ID</th>
            <?php
            foreach ($fields as $oneField):
                if( !$oneField->isshowinlist ){
                    continue;
                }
                ?>
                <th><?= $oneField->name ?></th>
                <?php
            endforeach;
            ?>
            <th>创建时间</th>
            <th>上一次更新时间</th>
            <th>是否公开</th>
            <th>推荐池</th>
            <th width="180">操作</th>
        </tr>
        <?php
        foreach ($list as $oneRecord):
        ?>
        <tr>
            <td>
                <?= $oneRecord['id'] ?>
            </td>
            <?php
            foreach ($fields as $oneField) {
                if( !$oneField->isshowinlist ){
                    continue;
                }
            ?>
             <td>
             <?php
                //字段数据库存储的值
                $dbValue = $oneRecord[$oneField->field];
                echo \app\services\ContentModelService::getFieldDisplayText($oneField, $dbValue);
             ?>
            </td>
            <?php
            }
            ?>
            <td>
                <?= date('Y-m-d H:i:s',$oneRecord['created_at']) ?>
            </td>
            <td>
                <?= $oneRecord['updated_at'] == 0 ? '-' : date('Y-m-d H:i:s',$oneRecord['updated_at']) ?>
            </td>
            <td>
                <?= $oneRecord['is_public'] == 1 ? '是' : '否' ?>
            </td>
            <td>
                <?= \common\models\Recommentpool::findOne([
                    'articleid' => $oneRecord['id']
                ]) ? '已入推荐池' : '未推荐' ?>
            </td>
            <td>
                <?php
                if($model->id == 7):
                ?>
                <a class="my-menu" title="预览" href="<?= \app\services\UrlQueryService::detailUrl2($oneRecord['id'],$model->id) ?>" target="_blank"><span class="Hui-iconfont Hui-iconfont-yulan"></span></a>
                <?php
                endif;
                ?>
                <a class="my-menu open-newWindow" title="编辑" data-title="编辑资讯：<?= $oneRecord['title'] ?>" data-href="/contentmodel/edit-record?categoryid=<?= $category->id ?>&recordid=<?= $oneRecord['id'] ?>" target="_blank"><span class="glyphicon glyphicon-pencil"></span></a>

                <a class="my-menu" title="删除" href="javascript:;" onclick="admin_del(this,<?= $oneRecord['id'] ?>,<?= $model->id ?>)"><span class="Hui-iconfont Hui-iconfont-del2"></span></a>
                <a  class="my-menu" title="推荐到推荐池"  onclick="addToTuiJianChi(<?= $oneRecord['id'] ?>)"><span class="Hui-iconfont Hui-iconfont-xuanzhong"></span></a>
            </td>
        </tr>
        <?php
        endforeach;
        ?>
    </tbody>
</table>
<script>
    <?php
    if($aryparams!=null):
    foreach($aryparams as $paramname=>$paramvalue):
    ?>
    $("[name='<?= $model->tablename ?>[<?= $paramname ?>]']").val("<?= $paramvalue ?>");
    <?php
    endforeach;
    endif;
    ?>
</script>
<script>
    function admin_del(obj,id,modelid){
        layer.confirm('确认要删除吗？',function(index){
            $.ajax({
                type: 'POST',
                url: '/contentmodel/del-record?id='+id+'&modelid='+modelid,
                success: function(data){
                    if(data.code == 0){
                        $(obj).parents("tr").remove();
                        layer.msg('已删除!',{icon:1,time:1000});
                    }else{
                        console.log('删除失败');
                    }
                },
                error:function(data) {
                    console.log(data.msg);
                },
            });
        });
    }

</script>