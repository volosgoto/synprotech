<?php

use yii\db\Migration;

/**
 * Class m181120_102049_services_translation_add_id_primary_key
 */
class m181120_102049_services_translation_add_id_primary_key extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('servicesTranslation', 'id', 'pk');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181120_102049_services_translation_add_id_primary_key cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181120_102049_services_translation_add_id_primary_key cannot be reverted.\n";

        return false;
    }
    */
}
