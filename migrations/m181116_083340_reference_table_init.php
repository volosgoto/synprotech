<?php

use yii\db\Migration;

/**
 * Class m181116_083340_reference_table_init
 */
class m181116_083340_reference_table_init extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('reference', [
            'id' => $this->primaryKey(),
            'year' => $this->string()->notNull(),
            'project_image' => $this->string(),
            'project_title' => $this->string()->notNull(),
            'customer_image' => $this->string(),
            'project_customer_title' => $this->string()->notNull(),
            'project_body' => $this->text()->notNull(),
            'customer_body' => $this->text(),
            'language' => $this->string()->defaultValue('en'),
            'publish_status' => $this->tinyInteger()->defaultValue(1),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181116_083340_reference_table_init cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181116_083340_reference_table_init cannot be reverted.\n";

        return false;
    }
    */
}
