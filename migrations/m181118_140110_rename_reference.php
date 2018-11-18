<?php

use yii\db\Migration;

/**
 * Class m181118_140110_rename_reference
 */
class m181118_140110_rename_reference extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameTable('reference', 'references');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181118_140110_rename_reference cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181118_140110_rename_reference cannot be reverted.\n";

        return false;
    }
    */
}
