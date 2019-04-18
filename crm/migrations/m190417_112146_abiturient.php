<?php

use yii\db\Migration;

/**
 * Class m190417_112146_abiturient
 */
class m190417_112146_abiturient extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%abiturient}}', [ 
            'id' => $this ->primaryKey(), 
            'surname' => $this ->string(), 
            'name' => $this ->string(), 
            'lastname' => $this ->string(), 
            'phone' => $this ->string(),
            'email' => $this ->string(),
            'klass' => $this ->integer(),
            'GPA' =>$this->double(),
            'orientation' => $this->integer(),
            'status' => $this->integer(),
            'date' =>$this ->date()
            ]); 
            $this->addForeignKey( 'abiturient_ibfk_1','abiturient', 'orientation',
            'orientation', 'id', 'CASCADE');
            $this->addForeignKey( 'abiturient_ibfk_2','abiturient', 'status',
            'status', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%abiturient}}');

       
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190417_112146_abiturient cannot be reverted.\n";

        return false;
    }
    */
}
