<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "student_education".
 *
 * @property integer $id
 * @property integer $class_id
 * @property integer $section_id
 * @property integer $session_id
 * @property integer $roll_id
 * @property integer $addmission_no
 */
class StudentEducation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student_education';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'class_id', 'section_id', 'session_id', 'roll_id', 'addmission_no'], 'required'],
            [['id', 'class_id', 'section_id', 'session_id', 'roll_id', 'addmission_no'], 'integer'],
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
            'roll_id' => Yii::t('app', 'Roll ID'),
            'addmission_no' => Yii::t('app', 'Addmission No'),
        ];
    }
}
