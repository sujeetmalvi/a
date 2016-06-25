<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "employee_login_details".
 *
 * @property integer $id
 * @property integer $employee_id
 * @property string $username
 * @property string $password
 */
class EmployeeLoginDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee_login_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['employee_id', 'username', 'password'], 'required'],
            [['employee_id'], 'integer'],
            [['username', 'password'], 'string', 'max' => 190],
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
            'username' => Yii::t('app', 'Username'),
            'password' => Yii::t('app', 'Password'),
        ];
    }
}
