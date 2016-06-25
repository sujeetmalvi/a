<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "_special_course".
 *
 * @property integer $id
 * @property string $course_name
 * @property string $course_start_date
 * @property string $course_end_date
 * @property string $course_duration
 * @property string $course-fee
 * @property string $for_class
 * @property string $compulsary
 * @property integer $session_id
 */
class SpecialCourse extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_special_course';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['course_name', 'course_start_date', 'course_end_date', 'course_duration', 'course-fee', 'for_class', 'compulsary', 'session_id'], 'required'],
            [['course_start_date', 'course_end_date'], 'safe'],
            [['course-fee'], 'number'],
            [['compulsary'], 'string'],
            [['session_id'], 'integer'],
            [['course_name', 'course_duration'], 'string', 'max' => 120],
            [['for_class'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'course_name' => Yii::t('app', 'Course Name'),
            'course_start_date' => Yii::t('app', 'Course Start Date'),
            'course_end_date' => Yii::t('app', 'Course End Date'),
            'course_duration' => Yii::t('app', 'Course Duration'),
            'course-fee' => Yii::t('app', 'Course Fee'),
            'for_class' => Yii::t('app', 'For Class'),
            'compulsary' => Yii::t('app', 'Compulsary'),
            'session_id' => Yii::t('app', 'Session ID'),
        ];
    }
}
