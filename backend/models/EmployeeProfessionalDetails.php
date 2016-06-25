<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "employee_professional_details".
 *
 * @property integer $id
 * @property integer $employee_id
 * @property string $joining_date
 * @property integer $department_id
 * @property integer $designation_id
 * @property integer $employee_type_id
 */
class EmployeeProfessionalDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee_professional_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['employee_id', 'joining_date', 'department_id', 'designation_id', 'employee_type_id'], 'required'],
            [['employee_id', 'department_id', 'designation_id', 'employee_type_id'], 'integer'],
            [['joining_date'], 'safe'],
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
            'joining_date' => Yii::t('app', 'Joining Date'),
            'department_id' => Yii::t('app', 'Department ID'),
            'designation_id' => Yii::t('app', 'Designation ID'),
            'employee_type_id' => Yii::t('app', 'Employee Type ID'),
        ];
    }
}
