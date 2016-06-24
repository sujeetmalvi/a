<?php

namespace backend\models;

use Yii;
use yii\db\Expression;
use yii\behaviours\TimestampBehavior;

/**
 * This is the model class for table "_class_section_relation".
 *
 * @property integer $id
 * @property integer $class_id
 * @property integer $section_id

 * @property Section $section
 * @property ClassMaster $class
 */
class ClassSectionRelation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_class_section_relation';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_id', 'section_id'], 'required'],
            [['class_id', 'section_id'], 'integer'],
          
            [['class_id', 'section_id'], 'unique', 'targetAttribute' => ['class_id', 'section_id'], 'message' => 'The combination of Class  and Section  has already exists.'],
            [['section_id'], 'exist', 'skipOnError' => true, 'targetClass' => Section::className(), 'targetAttribute' => ['section_id' => 'id']],
            [['class_id'], 'exist', 'skipOnError' => true, 'targetClass' => ClassMaster::className(), 'targetAttribute' => ['class_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'class_id' => Yii::t('app', 'Class'),
            'section_id' => Yii::t('app', 'Section'),

        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSection()
    {
        return $this->hasOne(Section::className(), ['id' => 'section_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClass()
    {
        return $this->hasOne(ClassMaster::className(), ['id' => 'class_id']);
    }
}
