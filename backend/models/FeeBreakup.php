<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "_fee_breakup".
 *
 * @property integer $id
 * @property integer $fee_type_id
 * @property string $name
 * @property integer $amt
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
            [['fee_type_id', 'name', 'amt'], 'required'],
            [['fee_type_id', 'amt'], 'integer'],
            [['name'], 'string', 'max' => 120],
        ];
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
        ];
    }
}
