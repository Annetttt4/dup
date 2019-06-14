<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "abiturient".
 *
 * @property int $id
 * @property string $surname
 * @property string $name
 * @property string $lastname
 * @property string $phone
 * @property string $email
 * @property int $klass
 * @property int $orientation
 * @property double $GPA
 * @property int $status
 * @property string $date
 *
 * @property Orientation $orientation0
 * @property Status $status0
 * @property SubDoc[] $subDocs
 */
class Abiturient extends \yii\db\ActiveRecord
{
    public $year;
   
    public static function tableName()
    {
        return 'abiturient';
    }

  
    public function rules()
    {
        return [
            [['email'], 'unique'],
            [['surname', 'name', 'lastname', 'phone', 'klass', 'orientation', 'GPA', 'status', 'date','year'], 'required'],
            [['klass', 'orientation', 'status'], 'integer'],
            [['GPA'], 'number'],
            [['surname', 'name', 'lastname', 'email'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 255],
            [['orientation'], 'exist', 'skipOnError' => true, 'targetClass' => Orientation::className(), 'targetAttribute' => ['orientation' => 'id']],
            [['status'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['status' => 'id']],
        ];
    }


    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'surname' => 'Фамилия',
            'name' => 'Имя',
            'lastname' => 'Отчество',
            'phone' => 'Телефон',
            'email' => 'E-mail',
            'klass' => 'Класс',
            'orientation' => 'Направление',
            'GPA' => 'Средний балл аттестата',
            'status' => 'Стaтус',
            'date' => 'Дата',
            'year'=>'Year',
           
        ];
    }


    public function getOrientation0()
    {
        return $this->hasOne(Orientation::className(), ['id' => 'orientation']);
    }

    public function getStatus0()
    {
        return $this->hasOne(Status::className(), ['id' => 'status']);
    }

    public function getSubDocs()
    {
        return $this->hasMany(SubDoc::className(), ['id_give' => 'id']);
    }
    
}
