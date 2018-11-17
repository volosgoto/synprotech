<?php

use yii\db\Migration;

/**
 * Class m181117_122835_contacts_translation_table
 */
class m181117_122835_contacts_translation_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ontacts_translation', [
            'id' => $this->primaryKey(),
            'locales_id' => $this->tinyInteger()->defaultValue(1),
            'company_title' => $this->string()->notNull(),
            'contacts_image' => $this->string(),
            'phone' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'country' => $this->string(),
            'city' => $this->string(),
            'region' => $this->string(),
            'zip' => $this->tinyInteger(),
            'adress' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181117_122835_contacts_translation_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181117_122835_contacts_translation_table cannot be reverted.\n";

        return false;
    }
    */
}
