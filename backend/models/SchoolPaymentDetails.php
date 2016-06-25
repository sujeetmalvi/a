<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "school_payment_details".
 *
 * @property integer $id
 * @property integer $student_id
 * @property string $pay_date
 * @property integer $pay_mode_id
 * @property string $amount
 * @property string $receipt_no
 */
class SchoolPaymentDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'school_payment_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'pay_date', 'pay_mode_id', 'amount', 'receipt_no'], 'required'],
            [['student_id', 'pay_mode_id'], 'integer'],
            [['pay_date'], 'safe'],
            [['amount'], 'number'],
            [['receipt_no'], 'string', 'max' => 190],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'student_id' => Yii::t('app', 'Student ID'),
            'pay_date' => Yii::t('app', 'Pay Date'),
            'pay_mode_id' => Yii::t('app', 'Pay Mode ID'),
            'amount' => Yii::t('app', 'Amount'),
            'receipt_no' => Yii::t('app', 'Receipt No'),
        ];
    }
}
