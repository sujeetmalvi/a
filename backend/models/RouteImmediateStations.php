<?php

namespace backend\models;

use Yii;
use yii\db\Expression;
use yii\behaviours\TimestampBehavior;

/**
 * This is the model class for table "_route_immediate_stations".
 *
 * @property integer $id
 * @property integer $route_id
 * @property string $name
 *
 * @property Route $route
 */
class RouteImmediateStations extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_route_immediate_stations';
    }



    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['route_id', 'name'], 'required'],
            [['route_id'], 'integer'],
          
            [['name'], 'string', 'max' => 90],
            [['route_id'], 'exist', 'skipOnError' => true, 'targetClass' => Route::className(), 'targetAttribute' => ['route_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'route_id' => Yii::t('app', 'Route'),
            'name' => Yii::t('app', 'Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoute()
    {
        return $this->hasOne(Route::className(), ['id' => 'route_id']);
    }
}
