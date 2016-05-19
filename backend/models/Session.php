<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "session".
 *
 * @property integer $id
 * @property string $start_date
 * @property string $end_date
 * @property string $sortname
 * @property string $status
 */
class Session extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'session';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['start_date', 'end_date', 'sortname', 'status'], 'required'],
            [['start_date', 'end_date'], 'safe'],
            [['status'], 'string'],
            [['sortname'], 'string', 'max' => 90],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'start_date' => Yii::t('app', 'Start Date'),
            'end_date' => Yii::t('app', 'End Date'),
            'sortname' => Yii::t('app', 'Sortname'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
