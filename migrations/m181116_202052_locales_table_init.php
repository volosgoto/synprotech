<?php

use yii\db\Migration;

/**
 * Class m181116_202052_locales_table_init
 */
class m181116_202052_locales_table_init extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('locales', [
            'id' => $this->primaryKey(),
            'name' => $this->string('255'),
            'code' => $this->string('10'),
        ]);
    }


    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181116_202052_locales_table_init cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181116_202052_locales_table_init cannot be reverted.\n";

        return false;
    }
    */
}
