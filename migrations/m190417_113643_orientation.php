<?php

use yii\db\Migration;

/**
 * Class m190417_113643_orientation
 */
class m190417_113643_orientation extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%orientation}}', [ 
            'id' => $this ->primaryKey(), 
            'name' => $this ->string(), 
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%orientation}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190417_113643_orientation cannot be reverted.\n";

        return false;
    }
    */
}
