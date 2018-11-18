<?php

use yii\db\Migration;

/**
 * Class m181118_135749_rename_customers_translation
 */
class m181118_135749_rename_customers_translation extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameTable('CustomersTranslation', 'customersTranslation');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181118_135749_rename_customers_translation cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181118_135749_rename_customers_translation cannot be reverted.\n";

        return false;
    }
    */
}
