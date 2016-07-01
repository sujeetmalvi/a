<?php

namespace backend\models;

use Yii;
use backend\models\FeeType;
use backend\models\ClassMaster;

/**
 * This is the model class for table "_fee_breakup".
 *
 * @property integer $id
 * @property integer $fee_type_id
 * @property string $name
 * @property integer $amt
 * @property integer $class_id
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
            [['fee_type_id','class_id', 'name', 'amt'], 'required'],
            [['fee_type_id','class_id', 'amt'], 'integer'],
            [['name'], 'string', 'max' => 120],
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFeetype()
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

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'fee_type_id' => Yii::t('app', 'Fee Type ID'),
            'name' => Yii::t('app', 'Name'),
            'amt' => Yii::t('app', 'Amt'),
            'class_id'=>Yii::t('app','Class')
        ];
    }
}
