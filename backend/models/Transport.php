<?php

namespace backend\models;

use Yii;
use yii\db\Expression;
use yii\behaviours\TimestampBehavior;
/**
 * This is the model class for table "_transport".
 *
 * @property integer $id
 * @property string $name
 * @property integer $status
 * @property string $number_plate
 *
 * @property TransportRoute[] $transportRoutes
 */
class Transport extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_transport';
    }



    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'status','number_plate'], 'required'],
            [['status'], 'integer'],
           
            [['name', 'number_plate'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),

        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransportRoutes()
    {
        return $this->hasMany(TransportRoute::className(), ['transport_id' => 'id']);
    }
}
