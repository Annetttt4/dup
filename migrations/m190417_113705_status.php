<?php

use yii\db\Migration;

/**
 * Class m190417_113705_status
 */
class m190417_113705_status extends Migration
{
    /*
    /**
     * {@inheritdoc}
     
    public function safeUp()
    {
        

    }

    /**
     * {@inheritdoc}
     
    public function safeDown()
    {
     
    }

    */
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('{{%status}}', [ 
            'id' => $this ->primaryKey(), 
            'name' => $this ->string()
            ]);

    }

    public function down()
    {
           $this->dropTable('{{%status}}');
    }
    
}
