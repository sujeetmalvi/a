<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "_subject".
 *
 * @property integer $id
 * @property string $name
 * @property integer $subject_type
 */
class Subject extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_subject';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'subject_type'], 'required'],
            [['subject_type'], 'integer'],
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
            'subject_type' => Yii::t('app', 'Subject Type'),
        ];
    }
}
