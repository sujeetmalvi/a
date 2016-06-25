<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TimeTable;

/**
 * TimeTableSearch represents the model behind the search form about `backend\models\TimeTable`.
 */
class TimeTableSearch extends TimeTable
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'class_id', 'section_id', 'session_id', 'teacher_id', 'time_table_id', 'day_id', 'user_id'], 'integer'],
            [['created_on', 'updated_on'], 'safe'],
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
        $query = TimeTable::find();

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
            'class_id' => $this->class_id,
            'section_id' => $this->section_id,
            'session_id' => $this->session_id,
            'teacher_id' => $this->teacher_id,
            'time_table_id' => $this->time_table_id,
            'day_id' => $this->day_id,
            'created_on' => $this->created_on,
            'updated_on' => $this->updated_on,
            'user_id' => $this->user_id,
        ]);

        return $dataProvider;
    }
}
