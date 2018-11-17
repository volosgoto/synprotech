<?php

use yii\db\Migration;

/**
 * Class m181117_122457_reference_translation_table
 */
class m181117_122457_reference_translation_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('reference_translation', [
            'id' => $this->primaryKey(),
            'locales_id' => $this->tinyInteger()->defaultValue(1),
            'customers_id' => $this->tinyInteger(),
            'year' => $this->string()->notNull(),
            'project_image' => $this->string(),
            'project_title' => $this->string()->notNull(),
            'customer_image' => $this->string(),
            'project_customer_title' => $this->string()->notNull(),
            'project_body' => $this->text()->notNull(),
            'customer_body' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181117_122457_reference_translation_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181117_122457_reference_translation_table cannot be reverted.\n";

        return false;
    }
    */
}
