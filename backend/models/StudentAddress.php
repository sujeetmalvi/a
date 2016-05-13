<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "student_address".
 *
 * @property integer $id
 * @property integer $stu_id
 * @property string $cur_h_no
 * @property string $cur_street_address
 * @property string $cur_area
 * @property string $cur_po
 * @property integer $cur_district
 * @property integer $cur_state
 * @property integer $cur_pincode
 * @property string $cur_contact
 * @property string $created_at
 */
class StudentAddress extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student_address';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['stu_id', 'cur_h_no', 'cur_street_address', 'cur_area', 'cur_po', 'cur_district', 'cur_state', 'cur_pincode', 'cur_contact'], 'required'],
            [['stu_id', 'cur_district', 'cur_state', 'cur_pincode'], 'integer'],
            [['cur_street_address'], 'string'],
            [['created_at'], 'safe'],
            [['cur_h_no'], 'string', 'max' => 220],
            [['cur_area', 'cur_po'], 'string', 'max' => 222],
            [['cur_contact'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'stu_id' => Yii::t('app', 'Stu ID'),
            'cur_h_no' => Yii::t('app', 'Cur H No'),
            'cur_street_address' => Yii::t('app', 'Cur Street Address'),
            'cur_area' => Yii::t('app', 'Cur Area'),
            'cur_po' => Yii::t('app', 'Cur Po'),
            'cur_district' => Yii::t('app', 'Cur District'),
            'cur_state' => Yii::t('app', 'Cur State'),
            'cur_pincode' => Yii::t('app', 'Cur Pincode'),
            'cur_contact' => Yii::t('app', 'Cur Contact'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }
}
