<?php

namespace backend\models;

use Yii;
use yii\db\Expression;
use yii\behaviours\TimestampBehavior;

/**
 * This is the model class for table "_fee_type".
 *
 * @property integer $id
 * @property string $name
 * @property integer $status

 *
 * @property FeeMaster[] $feeMasters
 */
class FeeType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_fee_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'status'], 'required'],
            [['status'], 'integer'],
           
            [['name'], 'string', 'max' => 90],
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

        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFeeMasters()
    {
        return $this->hasMany(FeeMaster::className(), ['type_id' => 'id']);
    }
}
