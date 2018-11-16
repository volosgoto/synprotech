<?php

use yii\db\Migration;

/**
 * Class m181116_075222_categories_table_init
 */
class m181116_075222_categories_table_init extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('categories', [
            'id' => $this->primaryKey(),
//            'category_id' => $this->tinyInteger(),
            'category_image' => $this->string(),
            'title' => $this->string()->notNull(),
            'language' => $this->string()->defaultValue('en'),
            'publish_status' => $this->tinyInteger()->defaultValue(1),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181116_075222_categories_table_init cannot be reverted.\n";
        $this->dropTable('categories');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181116_075222_categories_table_init cannot be reverted.\n";

        return false;
    }
    */
}
