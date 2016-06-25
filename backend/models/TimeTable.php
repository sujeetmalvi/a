<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "time_table".
 *
 * @property integer $id
 * @property integer $class_id
 * @property integer $section_id
 * @property integer $session_id
 * @property integer $teacher_id
 * @property integer $time_table_id
 * @property integer $day_id
 * @property string $created_on
 * @property string $updated_on
 * @property integer $user_id
 */
class TimeTable extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'time_table';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_id', 'section_id', 'session_id', 'teacher_id', 'time_table_id', 'day_id', 'created_on', 'updated_on', 'user_id'], 'required'],
            [['class_id', 'section_id', 'session_id', 'teacher_id', 'time_table_id', 'day_id', 'user_id'], 'integer'],
            [['created_on', 'updated_on'], 'safe'],
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
            'time_table_id' => Yii::t('app', 'Time Table ID'),
            'day_id' => Yii::t('app', 'Day ID'),
            'created_on' => Yii::t('app', 'Created On'),
            'updated_on' => Yii::t('app', 'Updated On'),
            'user_id' => Yii::t('app', 'User ID'),
        ];
    }
}
