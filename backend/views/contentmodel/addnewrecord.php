<?php
/* @var $category  \common\models\Articlecategory */
/* @var $aryFieldValueType  \common\models\Field\FieldValueType[] */
/* @var $contentModel \common\models\Model */
/* @var $aryModelFields \common\models\Modelfield[] */
/* @var $categoryList common\models\Articlecategory[] */
?>



<form method="post" enctype="multipart/form-data" onsubmit="return beforeSubmit()" id="form1" target="_blank" >
            <div>
                <div class="wrapper-header">
                    <h1>
                        <span><?= $category->text ?> 数据录入</span>
                    </h1>
                </div>
                <input type="hidden" name="<?= $contentModel->tablename ?>[category]" value="<?= $category->id ?>" />
            </div>
          <div class="page-container">

            <table class="my-table-vertical">
                <tbody>

                <tr>
                    <th>内容分类</th>
                    <td>
                        <select id="sltcatgory" name="<?= $contentModel->tablename ?>[category]" onchange="" >
                        <?php
                        foreach($categoryList as $oneCategory):
                        ?>

                            <option value="<?= $oneCategory['id'] ?>" <?= $category->id==$oneCategory['id']?'selected':'' ?>><?= $oneCategory['text'] ?> <?= $oneCategory['iscontentcategory'] == 0 ? '[非内容节点]' : '' ?> </option>

                        <?php
                        endforeach;
                        ?>
                        </select>
                    </td>
                </tr>

                <?php
                foreach ($aryModelFields as $oneField):
                    $arySetting = json_decode(trim($oneField->setting),true);
                    if(!$arySetting){
                        $arySetting = [];
                    }
                    $value = '';
                ?>
                    <tr>
                        <th style="width:200px;"><?= $oneField->name ?></th>
                        <td id="td_<?= $oneField->field ?>">
                            <?= \app\services\FieldValueTypeService::getTheType($oneField->fieldvaluetype)->display($contentModel, $oneField , $arySetting, $value) ?>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>


                <tr>
                        <th>是否公开</th>
                        <td>
                            <label><input type="radio" name="<?= $contentModel->tablename ?>[is_public]" value="1" checked /> 是</label>
                            <label><input type="radio" name="<?= $contentModel->tablename ?>[is_public]" value="0" /> 否</label>
                        </td>
                </tr>

                </tbody>
            </table>


            <div class="fixed-bottom-btn">
                <input type="submit" class="btn btn-success" value="提交" />
            </div>
          </div>
</form>


