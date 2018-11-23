<?php

use yii\db\Migration;

/**
 * Class m181123_134006_update_zip_contacts_translation
 */
class m181123_134006_update_zip_contacts_translation extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('contactsTranslation', 'zip', 'integer');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181123_134006_update_zip_contacts_translation cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181123_134006_update_zip_contacts_translation cannot be reverted.\n";

        return false;
    }
    */
}
