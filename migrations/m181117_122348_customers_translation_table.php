<?php

use yii\db\Migration;

/**
 * Class m181117_122348_customers_translation_table
 */
class m181117_122348_customers_translation_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('customers_translation', [
            'id' => $this->primaryKey(),
            'customer_id' => $this->tinyInteger(),
            'locale_id' => $this->tinyInteger()->defaultValue(1),
            'image' => $this->string(),
            'title' => $this->string()->notNull(),
            'body' => $this->text()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181117_122348_customers_translation_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181117_122348_customers_translation_table cannot be reverted.\n";

        return false;
    }
    */
}
