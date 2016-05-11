<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "_section".
 *
 * @property integer $id
 * @property string $name
 * @property integer $updated_at
 * @property integer $created_at
 *
 * @property ClassSectionRelation[] $classSectionRelations
 * @property ClassMaster[] $classes
 */
class Section extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_section';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'updated_at', 'created_at'], 'required'],
            [['updated_at', 'created_at'], 'integer'],
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
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClassSectionRelations()
    {
        return $this->hasMany(ClassSectionRelation::className(), ['section_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClasses()
    {
        return $this->hasMany(ClassMaster::className(), ['id' => 'class_id'])->viaTable('_class_section_relation', ['section_id' => 'id']);
    }
}
