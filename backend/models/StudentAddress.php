<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "student_address".
 *
 * @property integer $id
 * @property integer $student_id
 * @property string $h_no
 * @property string $street_address
 * @property string $post_office
 * @property integer $district
 * @property integer $state
 * @property integer $country
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
            [['student_id', 'h_no', 'street_address', 'post_office', 'district', 'state', 'country'], 'required'],
            [['student_id', 'district', 'state', 'country'], 'integer'],
            [['street_address'], 'string'],
            [['h_no', 'post_office'], 'string', 'max' => 120],
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
            'h_no' => Yii::t('app', 'H No'),
            'street_address' => Yii::t('app', 'Street Address'),
            'post_office' => Yii::t('app', 'Post Office'),
            'district' => Yii::t('app', 'District'),
            'state' => Yii::t('app', 'State'),
            'country' => Yii::t('app', 'Country'),
        ];
    }
}
