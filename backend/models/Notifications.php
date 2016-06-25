<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "notifications".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $title
 * @property string $massage
 * @property integer $seen
 * @property integer $session_id
 */
class Notifications extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'notifications';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'title', 'massage', 'seen', 'session_id'], 'required'],
            [['user_id', 'seen', 'session_id'], 'integer'],
            [['massage'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'title' => Yii::t('app', 'Title'),
            'massage' => Yii::t('app', 'Massage'),
            'seen' => Yii::t('app', 'Seen'),
            'session_id' => Yii::t('app', 'Session ID'),
        ];
    }
}
