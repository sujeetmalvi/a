<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\AddmissionPaymentDetails;

/**
 * AddmissionPaymentDetailsSearch represents the model behind the search form about `backend\models\AddmissionPaymentDetails`.
 */
class AddmissionPaymentDetailsSearch extends AddmissionPaymentDetails
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'student_id', 'class_id', 'pay_mode', 'session_id'], 'integer'],
            [['amt', 'pay_mode_detail', 'remarks'], 'safe'],
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
        $query = AddmissionPaymentDetails::find();

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
            'class_id' => $this->class_id,
            'pay_mode' => $this->pay_mode,
            'session_id' => $this->session_id,
        ]);

        $query->andFilterWhere(['like', 'amt', $this->amt])
            ->andFilterWhere(['like', 'pay_mode_detail', $this->pay_mode_detail])
            ->andFilterWhere(['like', 'remarks', $this->remarks]);

        return $dataProvider;
    }
}
