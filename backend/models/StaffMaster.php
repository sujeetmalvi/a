<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "_staff_master".
 *
 * @property integer $id
 * @property string $name
 * @property string $title
 * @property integer $department_id
 * @property integer $sub_department_id
 * @property integer $designation_id
 * @property string $joining_date
 * @property string $leaving_date
 * @property integer $status
 */
class StaffMaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_staff_master';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'title', 'department_id', 'sub_department_id', 'designation_id', 'joining_date', 'leaving_date', 'status'], 'required'],
            [['department_id', 'sub_department_id', 'designation_id', 'status'], 'integer'],
            [['joining_date', 'leaving_date'], 'safe'],
            [['name', 'title'], 'string', 'max' => 120],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'title' => Yii::t('app', 'Title'),
            'department_id' => Yii::t('app', 'Department ID'),
            'sub_department_id' => Yii::t('app', 'Sub Department ID'),
            'designation_id' => Yii::t('app', 'Designation ID'),
            'joining_date' => Yii::t('app', 'Joining Date'),
            'leaving_date' => Yii::t('app', 'Leaving Date'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
