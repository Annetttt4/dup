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
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'abiturient';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email'], 'unique'],
            [['surname', 'name', 'lastname', 'phone', 'klass', 'orientation', 'GPA', 'status', 'date'], 'required'],
            [['klass', 'orientation', 'status'], 'integer'],
            [['GPA'], 'number'],
          //  [['date'], 'date','format' => 'd-M-yyyy'],
            [['surname', 'name', 'lastname', 'email'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 255],
            [['orientation'], 'exist', 'skipOnError' => true, 'targetClass' => Orientation::className(), 'targetAttribute' => ['orientation' => 'id']],
            [['status'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['status' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrientation0()
    {
        return $this->hasOne(Orientation::className(), ['id' => 'orientation']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus0()
    {
        return $this->hasOne(Status::className(), ['id' => 'status']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubDocs()
    {
        return $this->hasMany(SubDoc::className(), ['id_give' => 'id']);
    }
    public function getYear($date){
        $rows = Abiturient::find()
        ->select(['YEAR(date) as year'])
    ->from('abiturient')
    ->groupBy('year')
    ->all();
    return $rows;
    }
}
