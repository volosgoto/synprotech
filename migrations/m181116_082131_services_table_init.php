<?php

use yii\db\Migration;

/**
 * Class m181116_082131_services_table_init
 */
class m181116_082131_services_table_init extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('services', [
            'id' => $this->primaryKey(),
//            'services_id' => $this->tinyInteger(),
            'services_image' => $this->string(),
            'title' => $this->string()->notNull(),
            'body' => $this->text()->notNull(),
            'language' => $this->string()->defaultValue('en'),
            'publish_status' => $this->tinyInteger()->defaultValue(1),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181116_082131_services_table_init cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181116_082131_services_table_init cannot be reverted.\n";

        return false;
    }
    */
}
