<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "student_master".
 *
 * @property integer $id
 * @property string $name
 * @property string $do
 * @property string $gender
 * @property string $photo
 * @property string $contact
 * @property integer $from_session
 * @property integer $to_session
 * @property string $addmission_no
 * @property integer $catagory
 */
class StudentMaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student_master';
    }

    public function getAddmissionNo()
    {
          $max = $this->find()->select('id')->max('id');
        return $max+1;
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'do', 'gender', 'photo', 'contact', 'from_session', 'addmission_no','catagory'], 'required'],
            [['do'], 'safe'],
            [['gender', 'photo'], 'string'],
            [['from_session', 'to_session','catagory'], 'integer'],
            [['name'], 'string', 'max' => 120],
            [['contact'], 'string', 'max' => 190],
            [['addmission_no'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'do' => Yii::t('app', 'Date Of birth'),
            'gender' => Yii::t('app', 'Gender'),
            'photo' => Yii::t('app', 'Photo'),
            'contact' => Yii::t('app', 'Contact'),
            'from_session' => Yii::t('app', 'From Session'),
            'to_session' => Yii::t('app', 'To Session'),
            'addmission_no' => Yii::t('app', 'Addmission No'),
            'catagory'=>'Catagory'
        ];
    }
}
