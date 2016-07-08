<?php

namespace backend\models;

use Yii;
use backend\models\StudentAddress;
use backend\models\StudentEducation;

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

    public $class_id;
    public $section_id;
    public $roll_no;
    public $address;

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
            [['name', 'do', 'gender','contact', 'from_session', 'addmission_no','catagory','admission_date'], 'required'],
            [['do','class_id','roll_no','address'], 'safe'],
            [['gender', 'photo'], 'string'],
            [['from_session', 'to_session','catagory'], 'integer'],
            [['name'], 'string', 'max' => 120],
            [['contact'], 'string', 'max' => 190],
            [['addmission_no','admission_date'], 'string', 'max' => 40],
           // [['class_id'], 'string', 'max' => 40],
           // [['section'], 'string', 'max' => 40],
            [['roll_no'], 'string', 'max' => 40],
            [['address'], 'string', 'max' => 190],
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
            'name' => Yii::t('app', 'Name'),
          //  'class_id' => Yii::t('app', 'Class'),
            //'section' => Yii::t('app', 'Section'),
            'roll_no' => Yii::t('app', 'Roll Number'),
            'address' => Yii::t('app', 'Address'),
            'do' => Yii::t('app', 'Date Of birth'),
            'gender' => Yii::t('app', 'Gender'),
            'photo' => Yii::t('app', 'Photo'),
            'contact' => Yii::t('app', 'Contact'),
            'from_session' => Yii::t('app', 'From Session'),
            'to_session' => Yii::t('app', 'To Session'),
            'admission_date'=>Yii::t('app','Date of Admission'),
            'addmission_no' => Yii::t('app', 'Addmission No'),
            'catagory'=>'Catagory'
        ];
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEducation()
    {
        return $this->hasOne(StudentEducation::className(), ['student_id' => 'id']);
    }
    public function getSession()
    {
        return $this->hasOne(Session::className(), ['id' => 'from_session']);
    }



    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAddresses()
    {
        return $this->hasOne(StudentAddress::className(), ['student_id' => 'id']);
    }

}
