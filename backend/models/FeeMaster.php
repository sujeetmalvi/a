<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "_fee_master".
 *
 * @property integer $id
 * @property integer $class_id
 * @property string $name
 * @property integer $type_id
 *
 * @property FeeType $type
 * @property ClassMaster $class
 * @property FeePaymentDetails[] $feePaymentDetails
 */
class FeeMaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_fee_master';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_id', 'name', 'type_id'], 'required'],
            [['class_id', 'type_id'], 'integer'],
            [['name'], 'string', 'max' => 90],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => FeeType::className(), 'targetAttribute' => ['type_id' => 'id']],
            [['class_id'], 'exist', 'skipOnError' => true, 'targetClass' => ClassMaster::className(), 'targetAttribute' => ['class_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'class_id' => Yii::t('app', 'Class ID'),
            'name' => Yii::t('app', 'Name'),
            'type_id' => Yii::t('app', 'Type ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(FeeType::className(), ['id' => 'type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClass()
    {
        return $this->hasOne(ClassMaster::className(), ['id' => 'class_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFeePaymentDetails()
    {
        return $this->hasMany(FeePaymentDetails::className(), ['fee_id' => 'id']);
    }
}
