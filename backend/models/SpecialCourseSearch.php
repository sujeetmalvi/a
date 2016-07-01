<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SpecialCourse;

/**
 * SpecialCourseSearch represents the model behind the search form about `backend\models\SpecialCourse`.
 */
class SpecialCourseSearch extends SpecialCourse
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'session_id'], 'integer'],
            [['course_name', 'course_start_date', 'course_end_date', 'course_duration', 'for_class', 'compulsary'], 'safe'],
            [['course-fee'], 'number'],
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
        $query = SpecialCourse::find();

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
            'course_start_date' => $this->course_start_date,
            'course_end_date' => $this->course_end_date,
            //'course-fee' => $this->course_fee,
            'session_id' => $this->session_id,
        ]);

        $query->andFilterWhere(['like', 'course_name', $this->course_name])
            ->andFilterWhere(['like', 'course_duration', $this->course_duration])
            ->andFilterWhere(['like', 'for_class', $this->for_class])
            ->andFilterWhere(['like', 'compulsary', $this->compulsary]);

        return $dataProvider;
    }
}
