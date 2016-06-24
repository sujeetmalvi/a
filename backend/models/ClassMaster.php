<?php

namespace backend\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the model class for table "_class_master".
 *
 * @property integer $id
 * @property string $name
 * @property integer $status

 *
 * @property ClassSectionRelation[] $classSectionRelations
 * @property Section[] $sections
 */
class ClassMaster extends \yii\db\ActiveRecord
{
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_class_master';
    }



    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name',], 'required'],
            [['status'], 'integer'],
           
            [['name'], 'string', 'max' => 9],
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
            'status' => Yii::t('app', 'Status'),

        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClassSectionRelations()
    {
        return $this->hasMany(ClassSectionRelation::className(), ['class_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSections()
    {
        return $this->hasMany(Section::className(), ['id' => 'section_id'])->viaTable('_class_section_relation', ['class_id' => 'id']);
    }
}
