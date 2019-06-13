<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Abiturient;
use yii\data\SqlDataProvider;

/**
 * Search represents the model behind the search form of `app\models\Abiturient`.
 */
class Search extends Abiturient
{
    public $orientationName;
    public $statusName;
    public $year;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'klass', 'orientation', 'status'], 'integer'],
            [['surname', 'name', 'lastname', 'phone', 'email', 'orientationName','statusName'], 'safe'],
            [['GPA'], 'number'],
            [['date'], 'date', 'format' => 'yyyy-mm-dd'],
            [['year'],'date'],
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

        // $totalCount = Yii::$app->db->createCommand('SELECT COUNT(*) FROM Abiturient', [])->queryScalar();
        // // выполняем запрос
        // $sql = 'SELECT * FROM Abiturient';
        
        // $dataProvider = new SqlDataProvider([
        //     'sql' => $sql,
        //     'params' => [],
        //     'totalCount' => (int)$totalCount,
        //     'pagination' => [
        //         // количество пунктов на странице
        //         'pageSize' => 10,
        //     ]
        //     ]);
        if (!$this->validate()) {
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

        $query->andFilterWhere([
            'id' => $this->id,
            'name'=>$this->name,
            'surname'=>$this->surname,
            'email'=>$this->email,
            'klass' => $this->klass,
            'orientation' => $this->orientation,
            'GPA' => $this->GPA,
            'status' => $this->status,
            'date' => $this->date,
           'year'=>$this->year,
        ]);
		
	
		
        $query->andFilterWhere(['like', 'surname', $this->surname])
        ->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', Orientation::tableName().'.name', $this->orientationName])
            ->andFilterWhere(['like', Status::tableName().'.name', $this->statusName])
            ->andFilterWhere(['like','date',$this->date]);
        return $dataProvider;
    }
}
