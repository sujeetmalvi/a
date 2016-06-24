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
 * @property integer $student_id
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
            [['class_id', 'section_id', 'session_id', 'roll_id', 'addmission_no','student_id'], 'required'],
            [['class_id', 'section_id', 'session_id', 'roll_id', 'addmission_no','student_id'], 'integer'],
        ];
    }

    public function getRollno($class_id,$section_id)
    {
        $max = $this->find()->where(['class_id'=>$class_id,'section_id'=>$section_id])->select('id')->max('id');
        return $max=$max+1;


    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'class_id' => Yii::t('app', 'Class '),
            'student_id'=>Yii::t('app','Student id'),
            'section_id' => Yii::t('app', 'Section '),
            'session_id' => Yii::t('app', 'Session '),
            'roll_id' => Yii::t('app', 'Roll Number'),
            'addmission_no' => Yii::t('app', 'Addmission Number'),
        ];
    }
}
