<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "circular".
 *
 * @property integer $id
 * @property string $title
 * @property string $massage
 * @property string $for_id
 * @property integer $session_id
 * @property string $state_id
 * @property string $end_date
 * @property integer $user_id
 */
class Circular extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'circular';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'massage', 'for_id', 'session_id', 'state_id', 'end_date', 'user_id'], 'required'],
            [['massage', 'for_id'], 'string'],
            [['session_id', 'user_id'], 'integer'],
            [['state_id', 'end_date'], 'safe'],
            [['title'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'massage' => Yii::t('app', 'Massage'),
            'for_id' => Yii::t('app', 'For ID'),
            'session_id' => Yii::t('app', 'Session ID'),
            'state_id' => Yii::t('app', 'State ID'),
            'end_date' => Yii::t('app', 'End Date'),
            'user_id' => Yii::t('app', 'User ID'),
        ];
    }
}
