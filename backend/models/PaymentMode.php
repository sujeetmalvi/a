<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "_payment_mode".
 *
 * @property integer $id
 * @property string $mode
 * @property string $created_at
 * @property string $updated_at
 */
class PaymentMode extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_payment_mode';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mode', 'created_at', 'updated_at'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['mode'], 'string', 'max' => 90],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'mode' => Yii::t('app', 'Mode'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}
