<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "_fee_type".
 *
 * @property integer $id
 * @property string $name
 * @property integer $status
 *
 * @property FeeBreakup[] $feeBreakups
 * @property FeeMaster[] $feeMasters
 * @property FeePaymentDetails[] $feePaymentDetails
 */
class FeeType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_fee_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'status'], 'required'],
            [['status'], 'integer'],
            [['name'], 'string', 'max' => 90],
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
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFeeBreakups()
    {
        return $this->hasMany(FeeBreakup::className(), ['fee_type_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFeeMasters()
    {
        return $this->hasMany(FeeMaster::className(), ['type_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFeePaymentDetails()
    {
        return $this->hasMany(FeePaymentDetails::className(), ['fee_type_id' => 'id']);
    }
}
