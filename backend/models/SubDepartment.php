<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "_sub_department".
 *
 * @property integer $id
 * @property integer $department_id
 * @property string $name
 */
class SubDepartment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_sub_department';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['department_id', 'name'], 'required'],
            [['department_id'], 'integer'],
            [['name'], 'string', 'max' => 130],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'department_id' => Yii::t('app', 'Department ID'),
            'name' => Yii::t('app', 'Name'),
        ];
    }
}
