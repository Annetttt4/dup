<?php

use yii\db\Migration;

/**
 * Class m190516_160921_abiturient
 */
class m190516_160921_abiturient extends Migration
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
        echo "m190516_160921_abiturient cannot be reverted.\n";

        return false;
    }
*/
   
    public function up()
    {
        $this->createTable('abiturient', [ 
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
            'date' =>$this ->date(),
            'year' =>$this->year(),
            ]); 
            $this->createIndex(
                'orientation',
                'abiturient',
                'orientation'
            );
            $this->createIndex(
                'email',
                'abiturient',
                'email'
            );
            $this->createIndex(
                'status',
                'abiturient',
                'status'
            );
            $this->addForeignKey( 'abiturient_ibfk_1','abiturient', 'orientation',
            'orientation', 'id', 'CASCADE');
            $this->addForeignKey( 'abiturient_ibfk_2','abiturient', 'status',
            'status', 'id', 'CASCADE');
    }

    public function down()
    {
        
        $this->dropTable('{{%abiturient}}');
    }
    
}
