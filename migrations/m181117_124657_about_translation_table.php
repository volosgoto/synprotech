<?php

use yii\db\Migration;

/**
 * Class m181117_124657_about_translation_table
 */
class m181117_124657_about_translation_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // This is for home page showcase
        $this->createTable('about_translation', [
            'id' => $this->primaryKey(),
            'about_id' => $this->tinyInteger(),
            'locale_id' => $this->tinyInteger()->defaultValue(1),
            'image' => $this->string(),
            'title' => $this->string()->notNull(), // About Us, O нас
            'branding' => $this->string()->notNull(), // Company name
            'showcase_text' => $this->text(), // Text before More btn
            'body_text' => $this->text(), // Main company description
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181117_124657_about_translation_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181117_124657_about_translation_table cannot be reverted.\n";

        return false;
    }
    */
}
