<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "certification".
 *
 * @property integer $id
 * @property integer $certification_id
 * @property string $obtain_marks
 * @property integer $student_id
 * @property integer $user_id
 * @property string $created_on
 * @property integer $session_id
 */
class Certification extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'certification';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['certification_id', 'obtain_marks', 'student_id', 'user_id', 'created_on', 'session_id'], 'required'],
            [['certification_id', 'student_id', 'user_id', 'session_id'], 'integer'],
            [['created_on'], 'safe'],
            [['obtain_marks'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'certification_id' => Yii::t('app', 'Certification ID'),
            'obtain_marks' => Yii::t('app', 'Obtain Marks'),
            'student_id' => Yii::t('app', 'Student ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'created_on' => Yii::t('app', 'Created On'),
            'session_id' => Yii::t('app', 'Session ID'),
        ];
    }
}
