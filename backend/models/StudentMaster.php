<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "student_master".
 *
 * @property integer $id
 * @property string $name
 * @property string $adm_no
 * @property string $dob
 * @property string $gender
 * @property string $bloog_group
 * @property string $stu_email
 * @property string $photo
 * @property string $fname
 * @property string $mname
 * @property string $f_occupation
 * @property string $m_occupation
 * @property string $parent_contact
 * @property string $parent_email
 * @property string $cur_h_no
 * @property string $cur_street_address
 * @property string $cur_area
 * @property string $cur_po
 * @property integer $cur_district
 * @property integer $cur_state
 * @property integer $cur_pincode
 * @property string $cur_contact
 * @property string $per_h_no
 * @property string $per_street_address
 * @property string $per_area
 * @property string $per_po
 * @property integer $per_district
 * @property integer $per_state
 * @property integer $per_pincode
 * @property string $per_contact
 * @property integer $class
 * @property integer $section
 * @property integer $roll_no
 * @property string $transport_status
 * @property integer $catagory
 * @property integer $physically_disabled
 * @property integer $special_discount
 * @property string $created_at
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

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'dob', 'gender', 'fname', 'mname', 'f_occupation', 'm_occupation', 'parent_contact', 'cur_h_no', 'cur_street_address', 'cur_area', 'cur_po', 'cur_district', 'cur_state', 'cur_pincode', 'cur_contact', 'per_h_no', 'per_street_address', 'per_area', 'per_po', 'per_district', 'per_state', 'per_pincode', 'per_contact', 'class', 'section', 'catagory', 'physically_disabled'], 'required'],
            [['dob', 'created_at'], 'safe'],
            [['cur_street_address', 'per_street_address', 'transport_status'], 'string'],
            [['cur_district', 'cur_state', 'cur_pincode', 'per_district', 'per_state', 'per_pincode', 'class', 'section', 'roll_no', 'catagory', 'physically_disabled', 'special_discount'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['adm_no'], 'string', 'max' => 50],
            [['gender'], 'string', 'max' => 15],
            [['bloog_group'], 'string', 'max' => 12],
            [['stu_email'], 'string', 'max' => 244],
            [['photo', 'parent_email', 'cur_h_no', 'cur_area', 'cur_po', 'cur_contact', 'per_h_no', 'per_area', 'per_po', 'per_contact'], 'string', 'max' => 255],
            [['fname', 'mname'], 'string', 'max' => 222],
            [['f_occupation', 'm_occupation'], 'string', 'max' => 200],
            [['parent_contact'], 'string', 'max' => 225],
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
            'adm_no' => Yii::t('app', 'Adm No'),
            'dob' => Yii::t('app', 'Dob'),
            'gender' => Yii::t('app', 'Gender'),
            'bloog_group' => Yii::t('app', 'Bloog Group'),
            'stu_email' => Yii::t('app', 'Stu Email'),
            'photo' => Yii::t('app', 'Photo'),
            'fname' => Yii::t('app', 'Fname'),
            'mname' => Yii::t('app', 'Mname'),
            'f_occupation' => Yii::t('app', 'F Occupation'),
            'm_occupation' => Yii::t('app', 'M Occupation'),
            'parent_contact' => Yii::t('app', 'Parent Contact'),
            'parent_email' => Yii::t('app', 'Parent Email'),
            'cur_h_no' => Yii::t('app', 'Cur H No'),
            'cur_street_address' => Yii::t('app', 'Cur Street Address'),
            'cur_area' => Yii::t('app', 'Cur Area'),
            'cur_po' => Yii::t('app', 'Cur Po'),
            'cur_district' => Yii::t('app', 'Cur District'),
            'cur_state' => Yii::t('app', 'Cur State'),
            'cur_pincode' => Yii::t('app', 'Cur Pincode'),
            'cur_contact' => Yii::t('app', 'Cur Contact'),
            'per_h_no' => Yii::t('app', 'Per H No'),
            'per_street_address' => Yii::t('app', 'Per Street Address'),
            'per_area' => Yii::t('app', 'Per Area'),
            'per_po' => Yii::t('app', 'Per Po'),
            'per_district' => Yii::t('app', 'Per District'),
            'per_state' => Yii::t('app', 'Per State'),
            'per_pincode' => Yii::t('app', 'Per Pincode'),
            'per_contact' => Yii::t('app', 'Per Contact'),
            'class' => Yii::t('app', 'Class'),
            'section' => Yii::t('app', 'Section'),
            'roll_no' => Yii::t('app', 'Roll No'),
            'transport_status' => Yii::t('app', 'Transport Status'),
            'catagory' => Yii::t('app', 'Catagory'),
            'physically_disabled' => Yii::t('app', 'Physically Disabled'),
            'special_discount' => Yii::t('app', 'Special Discount'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }
}
