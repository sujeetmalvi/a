<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SchoolPaymentDetails;

/**
 * SchoolPaymentDetailsSearch represents the model behind the search form about `backend\models\SchoolPaymentDetails`.
 */
class SchoolPaymentDetailsSearch extends SchoolPaymentDetails
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'student_id', 'pay_mode_id'], 'integer'],
            [['pay_date', 'receipt_no'], 'safe'],
            [['amount'], 'number'],
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
        $query = SchoolPaymentDetails::find();

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
            'student_id' => $this->student_id,
            'pay_date' => $this->pay_date,
            'pay_mode_id' => $this->pay_mode_id,
            'amount' => $this->amount,
        ]);

        $query->andFilterWhere(['like', 'receipt_no', $this->receipt_no]);

        return $dataProvider;
    }
}
