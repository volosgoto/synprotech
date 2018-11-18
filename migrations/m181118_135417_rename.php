<?php

use yii\db\Migration;

/**
 * Class m181118_135417_rename
 */
class m181118_135417_rename extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameTable('services_translation', 'servicesTranslation');
        $this->renameTable('partners_translation', 'partnersTranslation');
        $this->renameTable('customers_translation', 'CustomersTranslation');
        $this->renameTable('reference_translation', 'referencesTranslation');
        $this->renameTable('about_translation', 'aboutTranslation');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181118_135417_rename cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181118_135417_rename cannot be reverted.\n";

        return false;
    }
    */
}
