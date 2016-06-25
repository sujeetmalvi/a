<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "certification_setup".
 *
 * @property integer $id
 * @property string $title
 * @property string $perticipating_class
 * @property integer $session_id
 * @property integer $user_id
 * @property string $date
 */
class CertificationSetup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'certification_setup';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'perticipating_class', 'session_id', 'user_id', 'date'], 'required'],
            [['session_id', 'user_id'], 'integer'],
            [['date'], 'safe'],
            [['title', 'perticipating_class'], 'string', 'max' => 255],
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
            'perticipating_class' => Yii::t('app', 'Perticipating Class'),
            'session_id' => Yii::t('app', 'Session ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'date' => Yii::t('app', 'Date'),
        ];
    }
}
