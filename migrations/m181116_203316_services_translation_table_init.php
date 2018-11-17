<?php

use yii\db\Migration;

/**
 * Class m181116_203316_services_translation_table_init
 */
class m181116_203316_services_translation_table_init extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('services_translation', [
            'id' => $this->tinyInteger(),
            'service_id' => $this->tinyInteger(),
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
        echo "m181116_203316_services_translation_table_init cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181116_203316_services_translation_table_init cannot be reverted.\n";

        return false;
    }
    */
}
