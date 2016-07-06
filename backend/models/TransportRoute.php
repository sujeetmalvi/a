<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "_transport_route".
 *
 * @property integer $id
 * @property integer $transport_id
 * @property integer $route_id
 */
class TransportRoute extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_transport_route';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['transport_id', 'route_id'], 'required'],
            [['transport_id', 'route_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'transport_id' => Yii::t('app', 'Transport ID'),
            'route_id' => Yii::t('app', 'Route ID'),
        ];
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
    public function getTransport()
    {
        return $this->hasOne(Transport::className(), ['id' => 'transport_id']);
    }
}
