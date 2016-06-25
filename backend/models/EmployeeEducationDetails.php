<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "employee_education_details".
 *
 * @property integer $id
 * @property integer $employee_id
 * @property integer $metric_board
 * @property integer $inter_board
 * @property string $metric_per
 * @property string $inter_per
 * @property integer $graduation_university
 * @property integer $graducation_type
 * @property string $graducation_per
 * @property string $post_graducation_per
 * @property integer $post_graducation_university
 * @property integer $post_graduaction_type
 * @property string $JBT
 * @property string $NTT
 */
class EmployeeEducationDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee_education_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['employee_id', 'metric_board', 'inter_board', 'metric_per', 'inter_per', 'graduation_university', 'graducation_type', 'graducation_per', 'post_graducation_per', 'post_graducation_university', 'post_graduaction_type', 'JBT', 'NTT'], 'required'],
            [['employee_id', 'metric_board', 'inter_board', 'graduation_university', 'graducation_type', 'post_graducation_university', 'post_graduaction_type'], 'integer'],
            [['JBT', 'NTT'], 'string'],
            [['metric_per', 'inter_per', 'graducation_per'], 'string', 'max' => 120],
            [['post_graducation_per'], 'string', 'max' => 110],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'employee_id' => Yii::t('app', 'Employee ID'),
            'metric_board' => Yii::t('app', 'Metric Board'),
            'inter_board' => Yii::t('app', 'Inter Board'),
            'metric_per' => Yii::t('app', 'Metric Per'),
            'inter_per' => Yii::t('app', 'Inter Per'),
            'graduation_university' => Yii::t('app', 'Graduation University'),
            'graducation_type' => Yii::t('app', 'Graducation Type'),
            'graducation_per' => Yii::t('app', 'Graducation Per'),
            'post_graducation_per' => Yii::t('app', 'Post Graducation Per'),
            'post_graducation_university' => Yii::t('app', 'Post Graducation University'),
            'post_graduaction_type' => Yii::t('app', 'Post Graduaction Type'),
            'JBT' => Yii::t('app', 'Jbt'),
            'NTT' => Yii::t('app', 'Ntt'),
        ];
    }
}
