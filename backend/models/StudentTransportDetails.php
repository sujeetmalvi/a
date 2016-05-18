<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "student_transport_details".
 *
 * @property integer $id
 * @property integer $route_id
 * @property integer $station_id
 * @property integer $student_id
 * @property string $start_date
 * @property string $created_at
 *
 * @property StudentMaster $student
 * @property Route $route
 * @property RouteImmediateStations $station
 */
class StudentTransportDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student_transport_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'route_id', 'station_id', 'student_id', 'start_date'], 'required'],
            [['id', 'route_id', 'station_id', 'student_id'], 'integer'],
            [['start_date', 'created_at'], 'safe'],
            [['route_id', 'station_id', 'student_id'], 'unique', 'targetAttribute' => ['route_id', 'station_id', 'student_id'], 'message' => 'The combination of Route ID, Station ID and Student ID has already been taken.'],
            [['student_id'], 'exist', 'skipOnError' => true, 'targetClass' => StudentMaster::className(), 'targetAttribute' => ['student_id' => 'id']],
            [['route_id'], 'exist', 'skipOnError' => true, 'targetClass' => Route::className(), 'targetAttribute' => ['route_id' => 'id']],
            [['station_id'], 'exist', 'skipOnError' => true, 'targetClass' => RouteImmediateStations::className(), 'targetAttribute' => ['station_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'route_id' => Yii::t('app', 'Route ID'),
            'station_id' => Yii::t('app', 'Station ID'),
            'student_id' => Yii::t('app', 'Student ID'),
            'start_date' => Yii::t('app', 'Start Date'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(StudentMaster::className(), ['id' => 'student_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoute()
    {
        return $this->hasOne(Route::className(), ['id' => 'route_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStation()
    {
        return $this->hasOne(RouteImmediateStations::className(), ['id' => 'station_id']);
    }
}
