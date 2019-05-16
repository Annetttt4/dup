<?php

use yii\db\Migration;

/**
 * Class m190417_113643_orientation
 */
class m190417_113643_orientation extends Migration
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
         $this->createTable('{{%orientation}}', [ 
            'id' => $this ->primaryKey(), 
            'name' => $this ->string(), 
            ]);

    }

    public function down()
    {
        $this->dropTable('{{%orientation}}');
    }
    
}
