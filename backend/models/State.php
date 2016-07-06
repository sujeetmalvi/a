<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "_state".
 *
 * @property integer $id
 * @property string $name
 * @property integer $country_id
 *
 * @property District[] $districts
 * @property StaffAddressCurrent[] $staffAddressCurrents
 * @property StaffAddressPermanent[] $staffAddressPermanents
 * @property Country $country
 * @property StudentAddress[] $studentAddresses
 */
class State extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_state';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'country_id'], 'required'],
            [['country_id'], 'integer'],
            [['name'], 'string', 'max' => 90],
            [['name'], 'unique'],
            [['country_id'], 'exist', 'skipOnError' => true, 'targetClass' => Country::className(), 'targetAttribute' => ['country_id' => 'id']],
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
            'country_id' => Yii::t('app', 'Country ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDistricts()
    {
        return $this->hasMany(District::className(), ['state_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaffAddressCurrents()
    {
        return $this->hasMany(StaffAddressCurrent::className(), ['state_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaffAddressPermanents()
    {
        return $this->hasMany(StaffAddressPermanent::className(), ['state_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(Country::className(), ['id' => 'country_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentAddresses()
    {
        return $this->hasMany(StudentAddress::className(), ['state' => 'id']);
    }
}
