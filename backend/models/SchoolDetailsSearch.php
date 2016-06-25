<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SchoolDetails;

/**
 * SchoolDetailsSearch represents the model behind the search form about `backend\models\SchoolDetails`.
 */
class SchoolDetailsSearch extends SchoolDetails
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'school_id', 'affilated_to', 'from_class', 'to_class', 'hostel', 'status'], 'integer'],
            [['name', 'address', 'registration_no', 'admin_username', 'admin_password'], 'safe'],
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
        $query = SchoolDetails::find();

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
            'school_id' => $this->school_id,
            'affilated_to' => $this->affilated_to,
            'from_class' => $this->from_class,
            'to_class' => $this->to_class,
            'hostel' => $this->hostel,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'registration_no', $this->registration_no])
            ->andFilterWhere(['like', 'admin_username', $this->admin_username])
            ->andFilterWhere(['like', 'admin_password', $this->admin_password]);

        return $dataProvider;
    }
}
