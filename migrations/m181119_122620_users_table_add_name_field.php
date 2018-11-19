<?php

use yii\db\Migration;

/**
 * Class m181119_122620_users_table_add_name_field
 */
class m181119_122620_users_table_add_name_field extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('users', 'name', $this->string(100)->after('id'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181119_122620_users_table_add_name_field cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181119_122620_users_table_add_name_field cannot be reverted.\n";

        return false;
    }
    */
}
