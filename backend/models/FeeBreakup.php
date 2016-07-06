<?php

namespace backend\models;

use Yii;
use backend\models\ClassMaster;

/**
 * This is the model class for table "_fee_breakup".
 *
 * @property integer $id
 * @property integer $fee_type_id
 * @property string $name
 * @property integer $amt
 * @property integer $class_id
 *
 * @property FeeType $feeType
 */
class FeeBreakup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_fee_breakup';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fee_type_id', 'name', 'amt', 'class_id'], 'required'],
            [['fee_type_id', 'amt', 'class_id'], 'integer'],
            [['name'], 'string', 'max' => 120],
            [['fee_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => FeeType::className(), 'targetAttribute' => ['fee_type_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'fee_type_id' => Yii::t('app', 'Fee Type '),
            'name' => Yii::t('app', 'Name'),
            'amt' => Yii::t('app', 'Amt'),
            'class_id' => Yii::t('app', 'Class'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFeeType()
    {
        return $this->hasOne(FeeType::className(), ['id' => 'fee_type_id']);
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClassname()
    {
        return $this->hasOne(ClassMaster::className(), ['id' => 'class_id']);
    }
}
