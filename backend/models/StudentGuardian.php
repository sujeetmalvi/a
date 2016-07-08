<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "student_guardian".
 *
 * @property integer $id
 * @property string $fathername
 * @property string $mothername
 * @property string $fatheroccupation
 * @property string $motheroccupation
 * @property string $fathereducation
 * @property string $monthereducation
 * @property string $fathercontact
 * @property string $mothercontact
 * @property string $email
 * @property integer $student_id
 */
class StudentGuardian extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student_guardian';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fathername', 'mothername', 'fatheroccupation', 'motheroccupation', 'fathereducation','student_id', 'monthereducation', 'fathercontact', 'mothercontact', 'email'], 'required'],
            [['fathername'], 'string', 'max' => 255],
            [['mothername', 'fatheroccupation', 'motheroccupation', 'fathereducation', 'monthereducation', 'fathercontact', 'mothercontact', 'email','student_id'], 'string', 'max' => 245],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'fathername' => Yii::t('app', 'Fathername'),
            'mothername' => Yii::t('app', 'Mothername'),
            'fatheroccupation' => Yii::t('app', 'Fatheroccupation'),
            'motheroccupation' => Yii::t('app', 'Motheroccupation'),
            'fathereducation' => Yii::t('app', 'Fathereducation'),
            'monthereducation' => Yii::t('app', 'Monthereducation'),
            'fathercontact' => Yii::t('app', 'Fathercontact'),
            'mothercontact' => Yii::t('app', 'Mothercontact'),
            'email' => Yii::t('app', 'Email'),
            'student_id'=>Yii::t('app','Student Id')
        ];
    }
}
