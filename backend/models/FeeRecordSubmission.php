<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "_fee_record_submission".
 *
 * @property integer $id
 * @property integer $student_id
 * @property integer $session_id
 * @property string $amount
 * @property string $for_month
 * @property string $to_month
 * @property integer $pay_mode_id
 * @property string $pay_mode-detail
 * @property string $remarks
 * @property string $emp_id
 * @property integer $created_on
 */
class FeeRecordSubmission extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_fee_record_submission';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'session_id', 'amount', 'for_month', 'to_month', 'pay_mode_id', 'pay_mode-detail', 'remarks', 'emp_id', 'created_on'], 'required'],
            [['student_id', 'session_id', 'pay_mode_id', 'created_on'], 'integer'],
            [['for_month', 'to_month'], 'safe'],
            [['pay_mode-detail', 'remarks', 'emp_id'], 'string'],
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
            'student_id' => Yii::t('app', 'Student ID'),
            'session_id' => Yii::t('app', 'Session ID'),
            'amount' => Yii::t('app', 'Amount'),
            'for_month' => Yii::t('app', 'For Month'),
            'to_month' => Yii::t('app', 'To Month'),
            'pay_mode_id' => Yii::t('app', 'Pay Mode ID'),
            'pay_mode-detail' => Yii::t('app', 'Pay Mode Detail'),
            'remarks' => Yii::t('app', 'Remarks'),
            'emp_id' => Yii::t('app', 'Emp ID'),
            'created_on' => Yii::t('app', 'Created On'),
        ];
    }
}
