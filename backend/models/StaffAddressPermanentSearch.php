<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\StaffAddressPermanent;

/**
 * StaffAddressPermanentSearch represents the model behind the search form about `backend\models\StaffAddressPermanent`.
 */
class StaffAddressPermanentSearch extends StaffAddressPermanent
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'staff_id', 'district_id', 'state_id', 'country_id'], 'integer'],
            [['h_no', 'street_address', 'post_office'], 'safe'],
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
        $query = StaffAddressPermanent::find();

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
            'staff_id' => $this->staff_id,
            'district_id' => $this->district_id,
            'state_id' => $this->state_id,
            'country_id' => $this->country_id,
        ]);

        $query->andFilterWhere(['like', 'h_no', $this->h_no])
            ->andFilterWhere(['like', 'street_address', $this->street_address])
            ->andFilterWhere(['like', 'post_office', $this->post_office]);

        return $dataProvider;
    }
}
