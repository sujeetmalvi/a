<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "addmission_payment_details".
 *
 * @property integer $id
 * @property integer $student_id
 * @property integer $class_id
 * @property string $amt
 * @property integer $pay_mode
 * @property string $pay_mode_detail
 * @property string $remarks
 * @property integer $session_id
 */
class AddmissionPaymentDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'addmission_payment_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'class_id', 'amt', 'pay_mode', 'pay_mode_detail', 'remarks', 'session_id'], 'required'],
            [['student_id', 'class_id', 'pay_mode', 'session_id'], 'integer'],
            [['remarks'], 'string'],
            [['amt'], 'string', 'max' => 11],
            [['pay_mode_detail'], 'string', 'max' => 250],
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
            'class_id' => Yii::t('app', 'Class ID'),
            'amt' => Yii::t('app', 'Amt'),
            'pay_mode' => Yii::t('app', 'Pay Mode'),
            'pay_mode_detail' => Yii::t('app', 'Pay Mode Detail'),
            'remarks' => Yii::t('app', 'Remarks'),
            'session_id' => Yii::t('app', 'Session ID'),
        ];
    }
}
