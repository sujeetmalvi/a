<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "employee_permanent_contact".
 *
 * @property integer $id
 * @property string $permanent_address
 * @property string $permanent_p_office
 * @property integer $permanent_district_id
 * @property string $permanent_district_name
 * @property string $permanent_pin
 * @property integer $permanent_state_id
 * @property string $permanent_state_name
 */
class EmployeePermanentContact extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee_permanent_contact';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['permanent_address', 'permanent_p_office', 'permanent_district_id', 'permanent_district_name', 'permanent_pin', 'permanent_state_id', 'permanent_state_name'], 'required'],
            [['permanent_address'], 'string'],
            [['permanent_district_id', 'permanent_state_id'], 'integer'],
            [['permanent_p_office', 'permanent_district_name', 'permanent_pin', 'permanent_state_name'], 'string', 'max' => 120],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'permanent_address' => Yii::t('app', 'Permanent Address'),
            'permanent_p_office' => Yii::t('app', 'Permanent P Office'),
            'permanent_district_id' => Yii::t('app', 'Permanent District ID'),
            'permanent_district_name' => Yii::t('app', 'Permanent District Name'),
            'permanent_pin' => Yii::t('app', 'Permanent Pin'),
            'permanent_state_id' => Yii::t('app', 'Permanent State ID'),
            'permanent_state_name' => Yii::t('app', 'Permanent State Name'),
        ];
    }
}
