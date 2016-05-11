<?php

namespace backend\models;

use Yii;
use yii\db\Expression;
use yii\behaviours\TimestampBehavior;

/**
 * This is the model class for table "_student_catagory".
 *
 * @property integer $id
 * @property string $name
 * @property string $discount_in_fee
 * @property string $discount_in_adm
 * @property string $created_at
 * @property string $updated_at
 */
class StudentCatagory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_student_catagory';
    }

    /**
     * timestamp Behaviour
     */

    public function behaviours(){
        return [
            'class'=>TimestampBehavior::classname(),
            'createdAtAttribute' => 'created_at',
            'updatedAtAttribute' => 'updated_at',
            'value' => new Expression('NOW()'),
        ]

    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'discount_in_fee', 'discount_in_adm', 'created_at', 'updated_at'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 60],
            [['discount_in_fee', 'discount_in_adm'], 'string', 'max' => 11],
            [['name'], 'unique'],
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
            'discount_in_fee' => Yii::t('app', 'Discount In Fee'),
            'discount_in_adm' => Yii::t('app', 'Discount In Adm'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}
