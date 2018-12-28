<?php
/* @var $model \common\models\Model */
/* @var $modelField \common\models\Modelfield */
/* @var $aryUISetting array */
/* @var $value string */
?>

<style>
    .level1,.level1 ul {display: flex;flex-direction: column;justify-content: center;flex: auto;}
   .level1 li,.level1 ul li {display: flex;flex-direction: row;justify-content: space-between;align-items: center;flex: auto;border: 1px solid #ccc;padding: 0 0 0 5px;border-collapse：collapse }
</style>

<script src="https://unpkg.com/vue@2.4.2/dist/vue.js"></script>

<input type="hidden" name="<?= $model->tablename ?>[<?= $modelField->field ?>]" />

<table id="<?= $modelField->field ?>">
    <tr v-for="item in items">
        <td>
            {{ item.name }}
        </td>
        <td>
            <div v-if="item.islistvalue">
                <ul>
                    <li v-for="_value_item in item.items">
                        <input type="text" :value="_value_item.name"/>
                        <input type="text" :value="_value_item.value"/>
                        <input type="checkbox"/>是否显示在列表
                    </li>
                </ul>
            </div>
            <div v-else>
                <input type="text" :value="item.name" class="name" />
                <input type="text" :value="item.value" class="value">
                <input type="checkbox"/>是否显示在列表
            </div>
        </td>
    </tr>
</table>

<script>
    var data = {
        items: [
            {
                name: '重要时间节点',
                items: [
                    {
                        name: '报名',
                        islistvalue: true,
                        value: [
                            {
                                name: '报名时间',
                                value: '2017-09-10',
                                showinlist: false
                            }
                        ]
                    },
                    {
                        name: '测试name',
                        islistvalue: false,
                        value: '测试值'
                    }
                ]
            },
            {
                name: '重要网址链接',
                items:
                    [
                        {
                            name: '联网线路网址',
                            islistvalue: true,
                            value: 'http://www.lt.com',
                            showinlist: false
                        },
                        {
                            name: '电信线路网址',
                            islistvalue: true,
                            value: 'http://www.dx.com',
                            showinlist: false
                        },
                    ]
            }
        ]
    };

    var <?= $modelField->field ?> = new Vue({
        el: '#<?= $modelField->field ?>',
        data: {
            items: data
        }
    })
</script>