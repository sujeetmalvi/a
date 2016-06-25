<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "assignments".
 *
 * @property integer $id
 * @property string $title
 * @property integer $user_id
 * @property integer $for_class
 * @property integer $for_section
 * @property string $publish_date
 * @property string $submit_date
 * @property integer $session_id
 * @property integer $subject_id
 * @property string $marks
 */
class Assignments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'assignments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'user_id', 'for_class', 'for_section', 'publish_date', 'submit_date', 'session_id', 'subject_id', 'marks'], 'required'],
            [['user_id', 'for_class', 'for_section', 'session_id', 'subject_id'], 'integer'],
            [['publish_date', 'submit_date'], 'safe'],
            [['title'], 'string', 'max' => 255],
            [['marks'], 'string', 'max' => 30],
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
            'user_id' => Yii::t('app', 'User ID'),
            'for_class' => Yii::t('app', 'For Class'),
            'for_section' => Yii::t('app', 'For Section'),
            'publish_date' => Yii::t('app', 'Publish Date'),
            'submit_date' => Yii::t('app', 'Submit Date'),
            'session_id' => Yii::t('app', 'Session ID'),
            'subject_id' => Yii::t('app', 'Subject ID'),
            'marks' => Yii::t('app', 'Marks'),
        ];
    }
}
