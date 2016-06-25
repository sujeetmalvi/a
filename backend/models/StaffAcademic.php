<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "_staff_academic".
 *
 * @property integer $id
 * @property integer $staff_id
 * @property string $year
 * @property string $percentage
 * @property integer $degree_id
 */
class StaffAcademic extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_staff_academic';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['staff_id', 'year', 'percentage', 'degree_id'], 'required'],
            [['staff_id', 'degree_id'], 'integer'],
            [['year'], 'safe'],
            [['percentage'], 'string', 'max' => 190],
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
            'year' => Yii::t('app', 'Year'),
            'percentage' => Yii::t('app', 'Percentage'),
            'degree_id' => Yii::t('app', 'Degree ID'),
        ];
    }
}
