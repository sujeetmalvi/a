<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\EmployeeEducationDetails;

/**
 * EmployeeEducationDetailsSearch represents the model behind the search form about `backend\models\EmployeeEducationDetails`.
 */
class EmployeeEducationDetailsSearch extends EmployeeEducationDetails
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'employee_id', 'metric_board', 'inter_board', 'graduation_university', 'graducation_type', 'post_graducation_university', 'post_graduaction_type'], 'integer'],
            [['metric_per', 'inter_per', 'graducation_per', 'post_graducation_per', 'JBT', 'NTT'], 'safe'],
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
        $query = EmployeeEducationDetails::find();

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
            'employee_id' => $this->employee_id,
            'metric_board' => $this->metric_board,
            'inter_board' => $this->inter_board,
            'graduation_university' => $this->graduation_university,
            'graducation_type' => $this->graducation_type,
            'post_graducation_university' => $this->post_graducation_university,
            'post_graduaction_type' => $this->post_graduaction_type,
        ]);

        $query->andFilterWhere(['like', 'metric_per', $this->metric_per])
            ->andFilterWhere(['like', 'inter_per', $this->inter_per])
            ->andFilterWhere(['like', 'graducation_per', $this->graducation_per])
            ->andFilterWhere(['like', 'post_graducation_per', $this->post_graducation_per])
            ->andFilterWhere(['like', 'JBT', $this->JBT])
            ->andFilterWhere(['like', 'NTT', $this->NTT]);

        return $dataProvider;
    }
}
