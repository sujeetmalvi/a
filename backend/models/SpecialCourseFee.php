<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "_special_course_fee".
 *
 * @property integer $id
 * @property integer $course_id
 * @property string $amt
 * @property integer $pay_mode
 * @property string $pay_detail
 * @property string $remarks
 */
class SpecialCourseFee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_special_course_fee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['course_id', 'amt', 'pay_mode', 'pay_detail', 'remarks'], 'required'],
            [['course_id', 'pay_mode'], 'integer'],
            [['remarks'], 'string'],
            [['amt', 'pay_detail'], 'string', 'max' => 120],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'course_id' => Yii::t('app', 'Course ID'),
            'amt' => Yii::t('app', 'Amt'),
            'pay_mode' => Yii::t('app', 'Pay Mode'),
            'pay_detail' => Yii::t('app', 'Pay Detail'),
            'remarks' => Yii::t('app', 'Remarks'),
        ];
    }
}
