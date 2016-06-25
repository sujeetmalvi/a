<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "_class_subject_assign".
 *
 * @property integer $id
 * @property integer $class_id
 * @property integer $subject_id
 * @property integer $session_id
 */
class ClassSubjectAssign extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_class_subject_assign';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_id', 'subject_id', 'session_id'], 'required'],
            [['class_id', 'subject_id', 'session_id'], 'integer'],
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
            'subject_id' => Yii::t('app', 'Subject ID'),
            'session_id' => Yii::t('app', 'Session ID'),
        ];
    }
}
