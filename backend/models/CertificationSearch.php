<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Certification;

/**
 * CertificationSearch represents the model behind the search form about `backend\models\Certification`.
 */
class CertificationSearch extends Certification
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'certification_id', 'student_id', 'user_id', 'session_id'], 'integer'],
            [['obtain_marks', 'created_on'], 'safe'],
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
        $query = Certification::find();

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
            'certification_id' => $this->certification_id,
            'student_id' => $this->student_id,
            'user_id' => $this->user_id,
            'created_on' => $this->created_on,
            'session_id' => $this->session_id,
        ]);

        $query->andFilterWhere(['like', 'obtain_marks', $this->obtain_marks]);

        return $dataProvider;
    }
}
