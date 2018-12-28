<?php
/* @var $model \common\models\Model */
/* @var $modelField \common\models\Modelfield */
/* @var $aryUISetting array */
/* @var $value string */

$aryRegion = Yii::$app->cache->get('area');
if(!$aryRegion) {
    $aryRegion = \common\models\Region::find()->all();
    Yii::$app->cache->set('area', $aryRegion);
}
?>
<select name="<?= $model->tablename ?>[<?= $modelField->field ?>]" style="display: inline;width: 250px;height: 30px;line-height: 30px;border-radius: 3px;border: none;border: 1px solid #ccc;text-align: center;">
    <option value="">请选择</option>
<?php
foreach ($aryRegion as $oneRegion) {
?>
<option <?= $value == $oneRegion->code ? 'selected' : '' ?> value="<?= $oneRegion->code ?>"><?= $oneRegion->type > 0 ? ( '|' . str_repeat('----',$oneRegion->type)) : '' ?> <?= $oneRegion->fullName ?></option>
<?php
}
?>
</select>

    <input type="text"  onkeyup="findArea($(this).val(),'<?= $model->tablename ?>[<?= $modelField->field ?>]')" style="width: 120px;" placeholder="搜索地区"/>


<script>
    var findArea = function (txt,domName) {
        var select = getFirstElementByName(domName);
        for (var i = 0; i < select.options.length; i++) {
            if (select.options[i].text.indexOf(txt) != -1) {
                select.options[i].selected = true;
                break;
            }
        }
    }
</script>