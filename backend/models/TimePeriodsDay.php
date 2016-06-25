<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "time_periods_day".
 *
 * @property integer $id
 * @property integer $student_id
 * @property integer $user_id
 * @property integer $session_id
 * @property integer $monday
 * @property integer $tuesday
 * @property integer $wednesday
 * @property integer $thursday
 * @property integer $friday
 * @property integer $saturday
 * @property integer $time_table_id
 * @property string $created_on
 */
class TimePeriodsDay extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'time_periods_day';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'user_id', 'session_id', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'time_table_id', 'created_on'], 'required'],
            [['student_id', 'user_id', 'session_id', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'time_table_id'], 'integer'],
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
            'user_id' => Yii::t('app', 'User ID'),
            'session_id' => Yii::t('app', 'Session ID'),
            'monday' => Yii::t('app', 'Monday'),
            'tuesday' => Yii::t('app', 'Tuesday'),
            'wednesday' => Yii::t('app', 'Wednesday'),
            'thursday' => Yii::t('app', 'Thursday'),
            'friday' => Yii::t('app', 'Friday'),
            'saturday' => Yii::t('app', 'Saturday'),
            'time_table_id' => Yii::t('app', 'Time Table ID'),
            'created_on' => Yii::t('app', 'Created On'),
        ];
    }
}
