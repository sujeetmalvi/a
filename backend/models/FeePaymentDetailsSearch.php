<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\FeePaymentDetails;

/**
 * FeePaymentDetailsSearch represents the model behind the search form about `backend\models\FeePaymentDetails`.
 */
class FeePaymentDetailsSearch extends FeePaymentDetails
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'fee_id', 'fee_type_id'], 'integer'],
            [['amount'], 'safe'],
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
        $query = FeePaymentDetails::find();

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
            'fee_id' => $this->fee_id,
            'fee_type_id' => $this->fee_type_id,
        ]);

        $query->andFilterWhere(['like', 'amount', $this->amount]);

        return $dataProvider;
    }
}
