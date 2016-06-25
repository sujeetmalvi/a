<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "time_class_teacher_duration".
 *
 * @property integer $id
 * @property integer $duration
 * @property integer $per_week
 * @property integer $time_table_id
 */
class TimeClassTeacherDuration extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'time_class_teacher_duration';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['duration', 'per_week', 'time_table_id'], 'required'],
            [['duration', 'per_week', 'time_table_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'duration' => Yii::t('app', 'Duration'),
            'per_week' => Yii::t('app', 'Per Week'),
            'time_table_id' => Yii::t('app', 'Time Table ID'),
        ];
    }
}
