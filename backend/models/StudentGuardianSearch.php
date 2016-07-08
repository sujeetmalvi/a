<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\StudentGuardian;

/**
 * StudentGuardianSearch represents the model behind the search form about `backend\models\StudentGuardian`.
 */
class StudentGuardianSearch extends StudentGuardian
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['fathername', 'mothername', 'fatheroccupation', 'motheroccupation', 'fathereducation', 'monthereducation', 'fathercontact', 'mothercontact', 'email'], 'safe'],
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
        $query = StudentGuardian::find();

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
        ]);

        $query->andFilterWhere(['like', 'fathername', $this->fathername])
            ->andFilterWhere(['like', 'mothername', $this->mothername])
            ->andFilterWhere(['like', 'fatheroccupation', $this->fatheroccupation])
            ->andFilterWhere(['like', 'motheroccupation', $this->motheroccupation])
            ->andFilterWhere(['like', 'fathereducation', $this->fathereducation])
            ->andFilterWhere(['like', 'monthereducation', $this->monthereducation])
            ->andFilterWhere(['like', 'fathercontact', $this->fathercontact])
            ->andFilterWhere(['like', 'mothercontact', $this->mothercontact])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
