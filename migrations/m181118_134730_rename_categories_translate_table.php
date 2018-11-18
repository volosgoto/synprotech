<?php

use yii\db\Migration;

/**
 * Class m181118_134730_rename_categories_translate_table
 */
class m181118_134730_rename_categories_translate_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameTable('categories_translation', 'categoriesTranslation');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181118_134730_rename_categories_translate_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181118_134730_rename_categories_translate_table cannot be reverted.\n";

        return false;
    }
    */
}
