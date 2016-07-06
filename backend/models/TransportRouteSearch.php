<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TransportRoute;

/**
 * TransportRouteSearch represents the model behind the search form about `backend\models\TransportRoute`.
 */
class TransportRouteSearch extends TransportRoute
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'transport_id', 'route_id'], 'integer'],
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
        $query = TransportRoute::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'transport_id' => $this->transport_id,
            'route_id' => $this->route_id,
        ]);

        return $dataProvider;
    }
}
