<?php

use yii\db\Migration;

/**
 * Class m181228_073917_hereugo
 */
class m181228_073917_hereugo extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('model', [
            'id' => $this->primaryKey(),
            'name' => $this->char(30)->defaultValue('')->comment('模型名称')->unique()->notNull(),
            'tablename' => $this->char(50)->defaultValue('')->comment('数据库存储表名')->unique()->notNull(),
            'enablearticlefulltextsearch' => $this->integer()->comment('是否启用全文搜索')->notNull(),
            'description' => $this->char(100)->defaultValue('')->comment('描述')->notNull(),
            'disabled' => $this->integer()->comment('是否启用该模型')->defaultValue(1)->notNull(),
            'create_at' => $this->integer()->comment('创建时间')->notNull(),
            'update_at' => $this->integer()->comment('最后更新时间')->notNull(),
        ]);

        $this->addCommentOnTable('model','内容模型表');


        $this->createTable('modelfield', [
            'id' => $this->primaryKey(),
            'modelid' => $this->integer()->comment('')->notNull(),
            'fieldvaluetype' => $this->char(20)->defaultValue('')->comment('字段表单类型')->notNull(),
            'field' => $this->char(30)->defaultValue('')->comment('字段数据库列名')->notNull(),
            'name' => $this->char(50)->defaultValue('')->comment('字段网页名称')->notNull(),
            'tips' => $this->text()->comment('字段提示,显示在字段别名下方作为表单输入提示')->notNull(),
            'setting' => $this->text()->comment('表单部分外观设置')->notNull(),
            'css' => $this->char(50)->defaultValue('')->comment('表单的CSS样式名')->notNull(),
            'minlength' => $this->integer()->comment('字段取值范围')->defaultValue(0)->notNull(),
            'maxlength' => $this->integer()->comment('字段取值范围，0表示无限制')->defaultValue(0)->notNull(),
            'pattern' => $this->char(255)->defaultValue('')->comment('正则表达式，表单提交校验数据合法性')->notNull(),
            'errortips' => $this->char(255)->defaultValue('')->comment('数据校验未通过的提示信息')->notNull(),
            'formattribute' => $this->char(255)->defaultValue('')->comment('自定义表单属性,比如onclick=的JS脚本')->notNull(),
            'unsetroleids' => $this->char(255)->defaultValue('')->comment('禁止设置字段值的角色')->notNull(),
            'isshowinlist' => $this->integer()->comment('是否在列表中显示该列')->notNull(),
            'isunique' => $this->integer()->comment('是否值唯一')->notNull(),
            'isbase' => $this->integer()->comment('是否基本信息')->notNull(),
            'issearch' => $this->integer()->comment('是否作为搜索字段')->notNull(),
            'issearchinlikestyle' => $this->integer()->defaultValue(0)->comment('是否模糊查询')->notNull(),
            'isfulltext' => $this->integer()->comment('是否应用该值进行全站搜索')->notNull(),
            'isposition' => $this->integer()->comment('在推荐位标签中调用')->notNull(),
            'listorder' => $this->integer()->comment('排序')->notNull()
        ]);

        $this->addCommentOnTable('modelfield','模型字段记录表');


        $this->createTable('articlecategory', [
            'id' => $this->primaryKey(),
            'modelid' => $this->integer()->comment('内容模型'),
            'category' => $this->char(50)->comment('栏目英文或者拼音名称')->notNull(),
            'text' => $this->char(50)->comment('栏目中文名称')->notNull(),
            'iscontentcategory' => $this->integer()->comment('是否可以在该栏目下面添加咨询内容')->notNull()->defaultValue(1),
            'image' => $this->char(100)->comment('栏目形象图片'),
            'description' =>  $this->char(255)->defaultValue('')->comment('栏目介绍，可以添加咨询内容的栏目应该放入描述'),
            'pid' => $this->integer()->comment('上级栏目')->defaultValue(0),
            'enable' => $this->integer()->comment('是否启用')->defaultValue(0),
            'ismenu' => $this->integer()->comment('是否在导航显示')->defaultValue(0),
            'listorder' => $this->integer()->defaultValue(1)->comment('排序'),
            'meta_title' =>  $this->char(255)->defaultValue('')->comment('栏目介绍，可以添加咨询内容的栏目应该放入描述'),
            'meta_keywords' =>  $this->char(255)->defaultValue('')->comment('栏目介绍，可以添加咨询内容的栏目应该放入描述'),
            'meta_description' =>  $this->char(255)->defaultValue('')->comment('栏目介绍，可以添加咨询内容的栏目应该放入描述'),
            'template_index' => $this->char(100)->comment('栏目首页模版文件'),
            'template_list' => $this->char(100)->comment('栏目内容列表模版文件'),
            'template_conent_detail' => $this->char(100)->comment('栏目内容详细页模版文件'),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], 'AUTO_INCREMENT=1');

        $this->addCommentOnTable('articlecategory','咨询[栏目]分类');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181228_073917_hereugo cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181228_073917_hereugo cannot be reverted.\n";

        return false;
    }
    */
}
