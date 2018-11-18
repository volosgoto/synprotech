<?php

use yii\db\Migration;

/**
 * Class m181118_132700_contactsTranslation
 */
class m181118_132700_contactsTranslation extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('contactsTranslation', [
            'id' => $this->primaryKey(),
            'сontact_id' => $this->tinyInteger(),
            'locale_id' => $this->tinyInteger()->defaultValue(1),
            'company_title' => $this->string()->notNull(),
            'image' => $this->string(),
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
        echo "m181118_132700_contactsTranslation cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181118_132700_contactsTranslation cannot be reverted.\n";

        return false;
    }
    */
}
