<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "_notification_student".
 *
 * @property integer $id
 * @property integer $student_id
 * @property string $massage
 * @property string $date_time
 * @property integer $session_id
 * @property integer $seen_status
 */
class NotificationStudent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_notification_student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'massage', 'date_time', 'session_id', 'seen_status'], 'required'],
            [['student_id', 'session_id', 'seen_status'], 'integer'],
            [['massage'], 'string'],
            [['date_time'], 'safe'],
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
            'massage' => Yii::t('app', 'Massage'),
            'date_time' => Yii::t('app', 'Date Time'),
            'session_id' => Yii::t('app', 'Session ID'),
            'seen_status' => Yii::t('app', 'Seen Status'),
        ];
    }
}
