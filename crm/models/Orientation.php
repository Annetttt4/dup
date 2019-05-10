<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orientation".
 *
 * @property int $id
 * @property string $name
 *
 * @property Abiturient[] $abiturients
 */
class Orientation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orientation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 300],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

   
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAbiturients()
    {
        return $this->hasMany(Abiturient::className(), ['orientation' => 'id']);
    }
    public static function getAll()
      {
             $data = self::find()->all();
             return $data;
      }
}
