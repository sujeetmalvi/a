<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "_district".
 *
 * @property integer $id
 * @property string $name
 * @property integer $state_id
 *
 * @property State $state
 * @property StaffAddressCurrent[] $staffAddressCurrents
 * @property StaffAddressPermanent[] $staffAddressPermanents
 * @property StudentAddress[] $studentAddresses
 */
class District extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_district';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'state_id'], 'required'],
            [['state_id'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['state_id'], 'exist', 'skipOnError' => true, 'targetClass' => State::className(), 'targetAttribute' => ['state_id' => 'id']],
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
            'state_id' => Yii::t('app', 'State ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getState()
    {
        return $this->hasOne(State::className(), ['id' => 'state_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaffAddressCurrents()
    {
        return $this->hasMany(StaffAddressCurrent::className(), ['district_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaffAddressPermanents()
    {
        return $this->hasMany(StaffAddressPermanent::className(), ['district_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentAddresses()
    {
        return $this->hasMany(StudentAddress::className(), ['district' => 'id']);
    }
}
