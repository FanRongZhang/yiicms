<?php
/* @var $this \yii\web\View */
/* @var $list \common\models\Model[] */
/* @var $pages \yii\data\Pagination */

?>

<div class="page-container">
<div class="wrapper-header">
    <a data-href="/contentmodel/create" data-title="新建内容模型" class="btn btn-primary open-newWindow"><span class="glyphicon glyphicon-plus"></span> 新建内容模型</a>
</div>
<table class="table table-bordered my-table">
    <tbody>
        <tr>
            <th>模型名称</th>
            <th>数据库表名</th>
            <th>操作</th>
        </tr>
        <?php
        foreach ($list as $oneModel):
        ?>
        <tr>
            <td><?= $oneModel->name ?></td>
            <td><?= $oneModel->tablename ?></td>
            <td>
                <a  class="my-menu open-newWindow" target="_blank" data-title="<?= $oneModel->name ?>-查看字段" data-href="/contentmodel/list-columns?modelid=<?= $oneModel->id ?>"><span class="glyphicon glyphicon-eye-open"></span> 查看字段</a>
                <a  class="my-menu open-newWindow" target="_blank" data-title="<?= $oneModel->name ?>-新建字段" data-href="/contentmodel/add-new-field?modelid=<?= $oneModel->id ?>"><span class="glyphicon glyphicon-plus"></span> 新建字段</a>

                <?php
                $dataCount = \app\services\GenerateTableModelService::getAQObjectByTableName($oneModel->tablename)::find()->count();
                if($dataCount==0){
                 ?>
                 <a style="color: red;" href="del-model?modelid=<?= $oneModel->id ?>">删除无数据的模型</a>
                 <?php
                }
                ?>
            </td>
        </tr>
        <?php
        endforeach;
        ?>
    </tbody>
</table>

<?= $this->render('/components/applypage',[
    'pages' => $pages
]) ?>
