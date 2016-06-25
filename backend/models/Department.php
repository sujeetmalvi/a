<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "_department".
 *
 * @property integer $id
 * @property string $name
 * @property integer $sub_department_status
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_department';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'sub_department_status'], 'required'],
            [['sub_department_status'], 'integer'],
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
            'name' => Yii::t('app', 'Name'),
            'sub_department_status' => Yii::t('app', 'Sub Department Status'),
        ];
    }
}
