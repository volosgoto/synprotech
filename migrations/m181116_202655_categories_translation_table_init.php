<?php

use yii\db\Migration;

/**
 * Class m181116_202655_categories_translation_table_init
 */
class m181116_202655_categories_translation_table_init extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('categories_translation', [
            'id' => $this->primaryKey(),
            'locales_id' => $this->tinyInteger()->defaultValue(1),
            'image' => $this->string(),
            'title' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181116_202655_categories_translation_table_init cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181116_202655_categories_translation_table_init cannot be reverted.\n";

        return false;
    }
    */
}
