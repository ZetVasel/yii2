<?php

use yii\db\Migration;

/**
 * Class m220213_195850_base
 */
class m220213_195850_base extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('base', [
            'id' => $this->primaryKey(),
            'internal_id' => $this->string(),
            'last_modify' => $this->string(),
            'regulator' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('base');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220213_195850_base cannot be reverted.\n";

        return false;
    }
    */
}
