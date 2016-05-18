<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\StudentTransportDetails;

/**
 * StudentTransportDetailsSearch represents the model behind the search form about `backend\models\StudentTransportDetails`.
 */
class StudentTransportDetailsSearch extends StudentTransportDetails
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'route_id', 'station_id', 'student_id'], 'integer'],
            [['start_date', 'created_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = StudentTransportDetails::find();

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

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'route_id' => $this->route_id,
            'station_id' => $this->station_id,
            'student_id' => $this->student_id,
            'start_date' => $this->start_date,
            'created_at' => $this->created_at,
        ]);

        return $dataProvider;
    }
}
