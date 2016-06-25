<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "school_details".
 *
 * @property integer $id
 * @property integer $school_id
 * @property string $name
 * @property string $address
 * @property string $registration_no
 * @property integer $affilated_to
 * @property integer $from_class
 * @property integer $to_class
 * @property string $admin_username
 * @property string $admin_password
 * @property integer $hostel
 * @property integer $status
 */
class SchoolDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'school_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_id', 'name', 'address', 'registration_no', 'affilated_to', 'from_class', 'to_class', 'admin_username', 'admin_password', 'hostel', 'status'], 'required'],
            [['school_id', 'affilated_to', 'from_class', 'to_class', 'hostel', 'status'], 'integer'],
            [['name', 'address'], 'string'],
            [['registration_no'], 'string', 'max' => 190],
            [['admin_username', 'admin_password'], 'string', 'max' => 120],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'school_id' => Yii::t('app', 'School ID'),
            'name' => Yii::t('app', 'Name'),
            'address' => Yii::t('app', 'Address'),
            'registration_no' => Yii::t('app', 'Registration No'),
            'affilated_to' => Yii::t('app', 'Affilated To'),
            'from_class' => Yii::t('app', 'From Class'),
            'to_class' => Yii::t('app', 'To Class'),
            'admin_username' => Yii::t('app', 'Admin Username'),
            'admin_password' => Yii::t('app', 'Admin Password'),
            'hostel' => Yii::t('app', 'Hostel'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
