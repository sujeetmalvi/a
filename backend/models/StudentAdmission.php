<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "student_admission".
 *
 * @property integer $id
 * @property integer $student_id
 * @property integer $fee_amt
 * @property integer $paid_fee
 * @property integer $discount_amt
 * @property integer $pay_mode
 * @property string $created_on
 * @property integer $discount
 */
class StudentAdmission extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student_admission';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'fee_amt', 'paid_fee', 'discount_amt', 'pay_mode', 'discount'], 'required'],
            [['student_id', 'fee_amt', 'paid_fee', 'discount_amt', 'pay_mode', 'discount'], 'integer'],
            [['created_on'], 'safe'],
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
            'fee_amt' => Yii::t('app', 'Fee Amt'),
            'paid_fee' => Yii::t('app', 'Paid Fee'),
            'discount_amt' => Yii::t('app', 'Discount Amt'),
            'pay_mode' => Yii::t('app', 'Pay Mode'),
            'created_on' => Yii::t('app', 'Created On'),
            'discount' => Yii::t('app', 'Discount'),
        ];
    }
}
