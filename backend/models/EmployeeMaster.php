<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "employee_master".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $photo
 * @property string $dob
 * @property string $gender
 * @property string $alternate_no
 * @property string $employee_code
 * @property integer $status
 * @property string $mobile
 */
class EmployeeMaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee_master';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'email', 'photo', 'dob', 'gender', 'alternate_no', 'employee_code', 'status', 'mobile'], 'required'],
            [['dob'], 'safe'],
            [['gender'], 'string'],
            [['status'], 'integer'],
            [['first_name', 'last_name', 'email', 'photo'], 'string', 'max' => 190],
            [['alternate_no', 'employee_code', 'mobile'], 'string', 'max' => 120],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'first_name' => Yii::t('app', 'First Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'email' => Yii::t('app', 'Email'),
            'photo' => Yii::t('app', 'Photo'),
            'dob' => Yii::t('app', 'Dob'),
            'gender' => Yii::t('app', 'Gender'),
            'alternate_no' => Yii::t('app', 'Alternate No'),
            'employee_code' => Yii::t('app', 'Employee Code'),
            'status' => Yii::t('app', 'Status'),
            'mobile' => Yii::t('app', 'Mobile'),
        ];
    }
}
