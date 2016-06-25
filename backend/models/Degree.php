<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "_degree".
 *
 * @property integer $id
 * @property string $name
 * @property integer $degree_type_id
 */
class Degree extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_degree';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'degree_type_id'], 'required'],
            [['degree_type_id'], 'integer'],
            [['name'], 'string', 'max' => 120],
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
            'degree_type_id' => Yii::t('app', 'Degree Type ID'),
        ];
    }
}
