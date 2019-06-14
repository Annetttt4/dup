<?php

namespace app\models;

use Yii;

class Orientation extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'orientation';
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 300],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }


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
