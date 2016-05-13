<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "special_fee".
 *
 * @property integer $id
 * @property integer $stu_id
 * @property integer $class_id
 * @property integer $section_id
 * @property integer $fee_type_id
 * @property integer $amount
 * @property integer $pay_mode
 * @property string $cheque_dt
 * @property string $cheque_no
 * @property string $bank_name
 * @property integer $paid_amt
 * @property string $created_at
 */
class SpecialFee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'special_fee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['stu_id', 'class_id', 'section_id', 'fee_type_id', 'amount', 'pay_mode', 'cheque_dt', 'cheque_no', 'bank_name', 'paid_amt'], 'required'],
            [['stu_id', 'class_id', 'section_id', 'fee_type_id', 'amount', 'pay_mode', 'paid_amt'], 'integer'],
            [['cheque_dt', 'created_at'], 'safe'],
            [['cheque_no', 'bank_name'], 'string', 'max' => 220],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'stu_id' => Yii::t('app', 'Stu ID'),
            'class_id' => Yii::t('app', 'Class ID'),
            'section_id' => Yii::t('app', 'Section ID'),
            'fee_type_id' => Yii::t('app', 'Fee Type ID'),
            'amount' => Yii::t('app', 'Amount'),
            'pay_mode' => Yii::t('app', 'Pay Mode'),
            'cheque_dt' => Yii::t('app', 'Cheque Dt'),
            'cheque_no' => Yii::t('app', 'Cheque No'),
            'bank_name' => Yii::t('app', 'Bank Name'),
            'paid_amt' => Yii::t('app', 'Paid Amt'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }
}
