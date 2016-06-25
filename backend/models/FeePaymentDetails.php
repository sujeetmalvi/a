<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "_fee_payment_details".
 *
 * @property integer $id
 * @property integer $fee_id
 * @property integer $fee_type_id
 * @property string $amount
 */
class FeePaymentDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_fee_payment_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fee_id', 'fee_type_id', 'amount'], 'required'],
            [['fee_id', 'fee_type_id'], 'integer'],
            [['amount'], 'string', 'max' => 120],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'fee_id' => Yii::t('app', 'Fee ID'),
            'fee_type_id' => Yii::t('app', 'Fee Type ID'),
            'amount' => Yii::t('app', 'Amount'),
        ];
    }
}
