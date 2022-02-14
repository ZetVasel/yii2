<?php

use yii\db\Migration;

/**
 * Class m220213_200354_user
 */
class m220213_200354_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'username' => $this->string(),
            'password' => $this->string(),
        ]);
        $this->insert('user',array(
            'username' => 'admin',
            'password' => 'admin'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220213_200354_user cannot be reverted.\n";

        return false;
    }
    */
}
