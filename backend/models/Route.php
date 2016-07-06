<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "_route".
 *
 * @property integer $id
 * @property string $starting_point
 * @property string $end_point
 *
 * @property RouteImmediateStations[] $routeImmediateStations
 * @property StudentTransport[] $studentTransports
 */
class Route extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_route';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['starting_point', 'end_point'], 'required'],
            [['starting_point', 'end_point'], 'string', 'max' => 90],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'starting_point' => Yii::t('app', 'Starting Point'),
            'end_point' => Yii::t('app', 'End Point'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRouteImmediateStations()
    {
        return $this->hasMany(RouteImmediateStations::className(), ['route_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentTransports()
    {
        return $this->hasMany(StudentTransport::className(), ['route_id' => 'id']);
    }
}
