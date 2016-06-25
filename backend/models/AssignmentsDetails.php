<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "assignments_details".
 *
 * @property integer $id
 * @property integer $assignment_id
 * @property integer $task
 * @property integer $user_id
 */
class AssignmentsDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'assignments_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['assignment_id', 'task', 'user_id'], 'required'],
            [['assignment_id', 'task', 'user_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'assignment_id' => Yii::t('app', 'Assignment ID'),
            'task' => Yii::t('app', 'Task'),
            'user_id' => Yii::t('app', 'User ID'),
        ];
    }
}
