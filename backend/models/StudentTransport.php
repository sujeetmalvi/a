<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "student_transport".
 *
 * @property integer $id
 * @property integer $student_id
 * @property integer $route_id
 * @property integer $station_id
 * @property integer $session_id
 */
class StudentTransport extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student_transport';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'route_id', 'station_id', 'session_id'], 'required'],
            [['student_id', 'route_id', 'station_id', 'session_id'], 'integer'],
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
            'route_id' => Yii::t('app', 'Route ID'),
            'station_id' => Yii::t('app', 'Station ID'),
            'session_id' => Yii::t('app', 'Session ID'),
        ];
    }
}
