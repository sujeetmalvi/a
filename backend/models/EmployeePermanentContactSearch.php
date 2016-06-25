<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\EmployeePermanentContact;

/**
 * EmployeePermanentContactSearch represents the model behind the search form about `backend\models\EmployeePermanentContact`.
 */
class EmployeePermanentContactSearch extends EmployeePermanentContact
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'permanent_district_id', 'permanent_state_id'], 'integer'],
            [['permanent_address', 'permanent_p_office', 'permanent_district_name', 'permanent_pin', 'permanent_state_name'], 'safe'],
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
        $query = EmployeePermanentContact::find();

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
            'permanent_district_id' => $this->permanent_district_id,
            'permanent_state_id' => $this->permanent_state_id,
        ]);

        $query->andFilterWhere(['like', 'permanent_address', $this->permanent_address])
            ->andFilterWhere(['like', 'permanent_p_office', $this->permanent_p_office])
            ->andFilterWhere(['like', 'permanent_district_name', $this->permanent_district_name])
            ->andFilterWhere(['like', 'permanent_pin', $this->permanent_pin])
            ->andFilterWhere(['like', 'permanent_state_name', $this->permanent_state_name]);

        return $dataProvider;
    }
}
