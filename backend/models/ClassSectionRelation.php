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
 * @property string $created_at
 * @property string $updated_at
 *
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
            [['class_id', 'section_id', 'created_at', 'updated_at'], 'required'],
            [['class_id', 'section_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['class_id', 'section_id'], 'unique', 'targetAttribute' => ['class_id', 'section_id'], 'message' => 'The combination of Class ID and Section ID has already been taken.'],
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
            'class_id' => Yii::t('app', 'Class ID'),
            'section_id' => Yii::t('app', 'Section ID'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
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
