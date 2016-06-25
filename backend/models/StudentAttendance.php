<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "_student_attendance".
 *
 * @property integer $id
 * @property integer $student_id
 * @property string $date
 * @property string $time
 * @property integer $session_id
 */
class StudentAttendance extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_student_attendance';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'date', 'time', 'session_id'], 'required'],
            [['student_id', 'session_id'], 'integer'],
            [['date', 'time'], 'safe'],
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
            'date' => Yii::t('app', 'Date'),
            'time' => Yii::t('app', 'Time'),
            'session_id' => Yii::t('app', 'Session ID'),
        ];
    }
}
