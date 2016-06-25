<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "employee_previous_details".
 *
 * @property integer $id
 * @property string $employee_id
 * @property string $name_of_pervious_org
 * @property string $from_date
 * @property string $to_date
 * @property integer $designation_id
 * @property string $remarks
 */
class EmployeePreviousDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee_previous_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['employee_id', 'name_of_pervious_org', 'from_date', 'to_date', 'designation_id', 'remarks'], 'required'],
            [['from_date', 'to_date'], 'safe'],
            [['designation_id'], 'integer'],
            [['remarks'], 'string'],
            [['employee_id', 'name_of_pervious_org'], 'string', 'max' => 120],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'employee_id' => Yii::t('app', 'Employee ID'),
            'name_of_pervious_org' => Yii::t('app', 'Name Of Pervious Org'),
            'from_date' => Yii::t('app', 'From Date'),
            'to_date' => Yii::t('app', 'To Date'),
            'designation_id' => Yii::t('app', 'Designation ID'),
            'remarks' => Yii::t('app', 'Remarks'),
        ];
    }
}
