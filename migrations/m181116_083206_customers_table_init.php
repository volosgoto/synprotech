<?php

use yii\db\Migration;

/**
 * Class m181116_083206_customers_table_init
 */
class m181116_083206_customers_table_init extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('customers', [
            'id' => $this->primaryKey(),
            'publish_status' => $this->tinyInteger()->defaultValue(1),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181116_083206_customers_table_init cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181116_083206_customers_table_init cannot be reverted.\n";

        return false;
    }
    */
}
