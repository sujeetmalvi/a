<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "student_fee".
 *
 * @property integer $id
 * @property integer $fee_type
 * @property integer $stu_id
 * @property integer $class_id
 * @property integer $section_id
 * @property integer $month_count
 * @property string $from_month
 * @property string $to_month
 * @property integer $net_amt
 * @property integer $late_fee
 * @property integer $total_amt
 * @property integer $special_discount
 * @property integer $payment_mode
 * @property string $created_at
 */
class StudentFee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student_fee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fee_type', 'stu_id', 'class_id', 'section_id', 'month_count', 'from_month', 'to_month', 'net_amt', 'late_fee', 'total_amt', 'special_discount', 'payment_mode'], 'required'],
            [['fee_type', 'stu_id', 'class_id', 'section_id', 'month_count', 'net_amt', 'late_fee', 'total_amt', 'special_discount', 'payment_mode'], 'integer'],
            [['from_month', 'to_month', 'created_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'fee_type' => Yii::t('app', 'Fee Type'),
            'stu_id' => Yii::t('app', 'Stu ID'),
            'class_id' => Yii::t('app', 'Class ID'),
            'section_id' => Yii::t('app', 'Section ID'),
            'month_count' => Yii::t('app', 'Month Count'),
            'from_month' => Yii::t('app', 'From Month'),
            'to_month' => Yii::t('app', 'To Month'),
            'net_amt' => Yii::t('app', 'Net Amt'),
            'late_fee' => Yii::t('app', 'Late Fee'),
            'total_amt' => Yii::t('app', 'Total Amt'),
            'special_discount' => Yii::t('app', 'Special Discount'),
            'payment_mode' => Yii::t('app', 'Payment Mode'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }
}
