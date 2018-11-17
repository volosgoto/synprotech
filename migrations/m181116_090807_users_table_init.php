<?php

use yii\db\Migration;

/**
 * Class m181116_090807_users_table_init
 */
class m181116_090807_users_table_init extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'image' => $this->string(),
            'email' => $this->string()->notNull(),
            'password' => $this->string(),
            'phone' => $this->string(),
            'role' => $this->string(),
            'is_admin' => $this->tinyInteger()->defaultValue(0),
            'active_status' => $this->tinyInteger()->defaultValue(1),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181116_090807_users_table_init cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181116_090807_users_table_init cannot be reverted.\n";

        return false;
    }
    */
}
