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
            [['surname', 'name', 'lastname', 'phone', 'email', 'klass', 'orientation', 'GPA', 'status', 'date'], 'required'],
            [['klass', 'orientation', 'status'], 'integer'],
            [['GPA'], 'number'],
            [['date'], 'safe'],
            [['surname', 'name', 'lastname', 'email'], 'string', 'max' => 50],
            [['phone'], 'string', 'max' => 25],
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
            'surname' => 'Surname',
            'name' => 'Name',
            'lastname' => 'Lastname',
            'phone' => 'Phone',
            'email' => 'Email',
            'klass' => 'Klass',
            'orientation' => 'Orientation',
            'GPA' => 'Gpa',
            'status' => 'Status',
            'date' => 'Date',
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
}
