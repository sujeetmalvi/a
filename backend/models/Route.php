<?php

namespace backend\models;

use Yii;
use yii\db\Expression;
use yii\behaviours\TimestampBehavior;

/**
 * This is the model class for table "_route".
 *
 * @property integer $id
 * @property string $starting_point
 * @property string $end_point
 * @property string $created_at
 * @property string $updated_at
 *
 * @property RouteImmediateStations[] $routeImmediateStations
 * @property TransportRoute[] $transportRoutes
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
     * timestamp Behaviour
     */

    public function behaviours(){
        return [
            'class'=>TimestampBehavior::classname(),
            'createdAtAttribute' => 'created_at',
            'updatedAtAttribute' => 'updated_at',
            'value' => new Expression('NOW()'),
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
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
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
    public function getTransportRoutes()
    {
        return $this->hasMany(TransportRoute::className(), ['route_id' => 'id']);
    }
}
