<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\StudentMaster;

/**
 * StudentMasterSearch represents the model behind the search form about `backend\models\StudentMaster`.
 */
class StudentMasterSearch extends StudentMaster
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cur_district', 'cur_state', 'cur_pincode', 'per_district', 'per_state', 'per_pincode', 'class', 'section', 'roll_no', 'catagory', 'physically_disabled', 'special_discount'], 'integer'],
            [['name', 'adm_no', 'dob', 'gender', 'bloog_group', 'stu_email', 'photo', 'fname', 'mname', 'f_occupation', 'm_occupation', 'parent_contact', 'parent_email', 'cur_h_no', 'cur_street_address', 'cur_area', 'cur_po', 'cur_contact', 'per_h_no', 'per_street_address', 'per_area', 'per_po', 'per_contact', 'transport_status', 'created_at'], 'safe'],
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
        $query = StudentMaster::find();

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
            'dob' => $this->dob,
            'cur_district' => $this->cur_district,
            'cur_state' => $this->cur_state,
            'cur_pincode' => $this->cur_pincode,
            'per_district' => $this->per_district,
            'per_state' => $this->per_state,
            'per_pincode' => $this->per_pincode,
            'class' => $this->class,
            'section' => $this->section,
            'roll_no' => $this->roll_no,
            'catagory' => $this->catagory,
            'physically_disabled' => $this->physically_disabled,
            'special_discount' => $this->special_discount,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'adm_no', $this->adm_no])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'bloog_group', $this->bloog_group])
            ->andFilterWhere(['like', 'stu_email', $this->stu_email])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'mname', $this->mname])
            ->andFilterWhere(['like', 'f_occupation', $this->f_occupation])
            ->andFilterWhere(['like', 'm_occupation', $this->m_occupation])
            ->andFilterWhere(['like', 'parent_contact', $this->parent_contact])
            ->andFilterWhere(['like', 'parent_email', $this->parent_email])
            ->andFilterWhere(['like', 'cur_h_no', $this->cur_h_no])
            ->andFilterWhere(['like', 'cur_street_address', $this->cur_street_address])
            ->andFilterWhere(['like', 'cur_area', $this->cur_area])
            ->andFilterWhere(['like', 'cur_po', $this->cur_po])
            ->andFilterWhere(['like', 'cur_contact', $this->cur_contact])
            ->andFilterWhere(['like', 'per_h_no', $this->per_h_no])
            ->andFilterWhere(['like', 'per_street_address', $this->per_street_address])
            ->andFilterWhere(['like', 'per_area', $this->per_area])
            ->andFilterWhere(['like', 'per_po', $this->per_po])
            ->andFilterWhere(['like', 'per_contact', $this->per_contact])
            ->andFilterWhere(['like', 'transport_status', $this->transport_status]);

        return $dataProvider;
    }
}
