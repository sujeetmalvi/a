<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "school_license".
 *
 * @property integer $id
 * @property integer $student_id
 * @property string $from_date
 * @property string $to_date
 * @property integer $status
 */
class SchoolLicense extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'school_license';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'from_date', 'to_date', 'status'], 'required'],
            [['student_id', 'status'], 'integer'],
            [['from_date', 'to_date'], 'safe'],
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
            'from_date' => Yii::t('app', 'From Date'),
            'to_date' => Yii::t('app', 'To Date'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
