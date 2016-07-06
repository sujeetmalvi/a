<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "_payment_mode".
 *
 * @property integer $id
 * @property string $mode
 *
 * @property FeeRecordSubmission[] $feeRecordSubmissions
 */
class PaymentMode extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_payment_mode';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mode'], 'required'],
            [['mode'], 'string', 'max' => 90],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'mode' => Yii::t('app', 'Mode'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFeeRecordSubmissions()
    {
        return $this->hasMany(FeeRecordSubmission::className(), ['pay_mode_id' => 'id']);
    }
}
