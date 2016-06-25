<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "class_teacher".
 *
 * @property integer $id
 * @property integer $class_id
 * @property integer $section_id
 * @property integer $session_id
 * @property integer $teacher_id
 * @property string $created_at
 * @property integer $user_id
 * @property integer $time_table_id
 */
class ClassTeacher extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'class_teacher';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_id', 'section_id', 'session_id', 'teacher_id', 'created_at', 'user_id', 'time_table_id'], 'required'],
            [['class_id', 'section_id', 'session_id', 'teacher_id', 'user_id', 'time_table_id'], 'integer'],
            [['created_at'], 'safe'],
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
            'section_id' => Yii::t('app', 'Section ID'),
            'session_id' => Yii::t('app', 'Session ID'),
            'teacher_id' => Yii::t('app', 'Teacher ID'),
            'created_at' => Yii::t('app', 'Created At'),
            'user_id' => Yii::t('app', 'User ID'),
            'time_table_id' => Yii::t('app', 'Time Table ID'),
        ];
    }
}
