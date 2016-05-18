<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\AdmissionPaymentDetails;

/**
 * AdmissionPaymentDetailsSearch represents the model behind the search form about `backend\models\AdmissionPaymentDetails`.
 */
class AdmissionPaymentDetailsSearch extends AdmissionPaymentDetails
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'stu_id'], 'integer'],
            [['adm_id', 'cheq_no', 'cheq_dt', 'bank_name', 'created_at'], 'safe'],
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
        $query = AdmissionPaymentDetails::find();

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
            'stu_id' => $this->stu_id,
            'cheq_dt' => $this->cheq_dt,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'adm_id', $this->adm_id])
            ->andFilterWhere(['like', 'cheq_no', $this->cheq_no])
            ->andFilterWhere(['like', 'bank_name', $this->bank_name]);

        return $dataProvider;
    }
}
