<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Assignments;

/**
 * AssignmentsSearch represents the model behind the search form about `backend\models\Assignments`.
 */
class AssignmentsSearch extends Assignments
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'for_class', 'for_section', 'session_id', 'subject_id'], 'integer'],
            [['title', 'publish_date', 'submit_date', 'marks'], 'safe'],
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
        $query = Assignments::find();

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
            'user_id' => $this->user_id,
            'for_class' => $this->for_class,
            'for_section' => $this->for_section,
            'publish_date' => $this->publish_date,
            'submit_date' => $this->submit_date,
            'session_id' => $this->session_id,
            'subject_id' => $this->subject_id,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'marks', $this->marks]);

        return $dataProvider;
    }
}
