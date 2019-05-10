<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Abiturient;

/**
 * Search represents the model behind the search form of `app\models\Abiturient`.
 */
class Search extends Abiturient
{
    public $orientationName;
    public $statusName;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'klass', 'orientation', 'status'], 'integer'],
            [['surname', 'name', 'lastname', 'phone', 'email', 'orientationName','statusName'], 'safe'],
            [['GPA'], 'number'],
            [['date'], 'date', 'format' => 'dd-mm-yyyy'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Abiturient::find();
        $query->joinWith(['orientation0']);
        $query->joinWith(['status0']);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
           
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        $dataProvider->sort->attributes['orientationName'] = [
            'asc' => [Orientation::tableName().'.name' => SORT_ASC],
            'desc' => [Orientation::tableName().'.name' => SORT_DESC],
        ];
        $dataProvider->sort->attributes['statusName'] = [
            'asc' => [Status::tableName().'.name' => SORT_ASC],
            'desc' => [Status::tableName().'.name' => SORT_DESC],
        ];

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'klass' => $this->klass,
            'orientation' => $this->orientation,
            'GPA' => $this->GPA,
            'status' => $this->status,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'surname', $this->surname])
        ->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', Orientation::tableName().'.name', $this->orientationName])
            ->andFilterWhere(['like', Status::tableName().'.name', $this->statusName]);

        return $dataProvider;
    }
}
