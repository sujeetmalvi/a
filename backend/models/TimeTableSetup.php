<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "time_table_setup".
 *
 * @property integer $id
 * @property integer $student_id
 * @property integer $user_id
 * @property integer $session_id
 * @property string $for_classes
 * @property integer $status
 * @property string $created_on
 */
class TimeTableSetup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'time_table_setup';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'user_id', 'session_id', 'for_classes', 'status', 'created_on'], 'required'],
            [['student_id', 'user_id', 'session_id', 'status'], 'integer'],
            [['created_on'], 'safe'],
            [['for_classes'], 'string', 'max' => 250],
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
            'user_id' => Yii::t('app', 'User ID'),
            'session_id' => Yii::t('app', 'Session ID'),
            'for_classes' => Yii::t('app', 'For Classes'),
            'status' => Yii::t('app', 'Status'),
            'created_on' => Yii::t('app', 'Created On'),
        ];
    }
}
