<?php

use yii\db\Migration;

/**
 * Class m181119_131713_rename_users_table
 */
class m181119_131713_rename_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameTable('users', 'user');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181119_131713_rename_users_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181119_131713_rename_users_table cannot be reverted.\n";

        return false;
    }
    */
}
