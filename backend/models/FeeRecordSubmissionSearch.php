<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\FeeRecordSubmission;

/**
 * FeeRecordSubmissionSearch represents the model behind the search form about `backend\models\FeeRecordSubmission`.
 */
class FeeRecordSubmissionSearch extends FeeRecordSubmission
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'student_id', 'session_id', 'pay_mode_id', 'created_on'], 'integer'],
            [['amount', 'for_month', 'to_month', 'pay_mode-detail', 'remarks', 'emp_id'], 'safe'],
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
        $query = FeeRecordSubmission::find();

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
            'session_id' => $this->session_id,
            'for_month' => $this->for_month,
            'to_month' => $this->to_month,
            'pay_mode_id' => $this->pay_mode_id,
            'created_on' => $this->created_on,
        ]);

        $query->andFilterWhere(['like', 'amount', $this->amount])
            ->andFilterWhere(['like', 'pay_mode-detail', $this->pay_mode-detail])
            ->andFilterWhere(['like', 'remarks', $this->remarks])
            ->andFilterWhere(['like', 'emp_id', $this->emp_id]);

        return $dataProvider;
    }
}
