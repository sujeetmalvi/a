<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\FeeBreakup;

/**
 * FeeBreakupSearch represents the model behind the search form about `backend\models\FeeBreakup`.
 */
class FeeBreakupSearch extends FeeBreakup
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'fee_type_id', 'amt', 'class_id'], 'integer'],
            [['name'], 'safe'],
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
        $query = FeeBreakup::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'fee_type_id' => $this->fee_type_id,
            'amt' => $this->amt,
            'class_id' => $this->class_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
