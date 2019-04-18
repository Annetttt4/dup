<?php

use yii\db\Migration;

/**
 * Class m190417_113705_status
 */
class m190417_113705_status extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%status}}', [ 
            'id' => $this ->primaryKey(), 
            'name' => $this ->string()
            ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%status}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190417_113705_status cannot be reverted.\n";

        return false;
    }
    */
}
