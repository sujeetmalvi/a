<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "_staff_address_permanent".
 *
 * @property integer $id
 * @property integer $staff_id
 * @property string $h_no
 * @property string $street_address
 * @property string $post_office
 * @property integer $district_id
 * @property integer $state_id
 * @property integer $country_id
 */
class StaffAddressPermanent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_staff_address_permanent';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['staff_id', 'h_no', 'street_address', 'post_office', 'district_id', 'state_id', 'country_id'], 'required'],
            [['staff_id', 'district_id', 'state_id', 'country_id'], 'integer'],
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
            'staff_id' => Yii::t('app', 'Staff ID'),
            'h_no' => Yii::t('app', 'H No'),
            'street_address' => Yii::t('app', 'Street Address'),
            'post_office' => Yii::t('app', 'Post Office'),
            'district_id' => Yii::t('app', 'District ID'),
            'state_id' => Yii::t('app', 'State ID'),
            'country_id' => Yii::t('app', 'Country ID'),
        ];
    }
}
