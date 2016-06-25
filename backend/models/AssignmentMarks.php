<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "assignment_marks".
 *
 * @property integer $id
 * @property integer $student_id
 * @property integer $assignment_id
 * @property string $marks_obtained
 * @property integer $user_id
 * @property string $created_on
 */
class AssignmentMarks extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'assignment_marks';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'assignment_id', 'marks_obtained', 'user_id', 'created_on'], 'required'],
            [['student_id', 'assignment_id', 'user_id'], 'integer'],
            [['created_on'], 'safe'],
            [['marks_obtained'], 'string', 'max' => 190],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'student_id' => Yii::t('app', 'Student ID'),
            'assignment_id' => Yii::t('app', 'Assignment ID'),
            'marks_obtained' => Yii::t('app', 'Marks Obtained'),
            'user_id' => Yii::t('app', 'User ID'),
            'created_on' => Yii::t('app', 'Created On'),
        ];
    }
}
