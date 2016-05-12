<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\ClassMaster;
use backend\models\Section;
/* @var $this yii\web\View */
/* @var $model backend\models\ClassSectionRelation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="class-section-relation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'class_id')->DropdownList(ArrayHelper::map(ClassMaster::find()->all(),'id','name'),['prompt'=>'Please Select Class']) ?>

    <?= $form->field($model, 'section_id')->DropdownList(ArrayHelper::map(Section::find()->all(),'id','name'),['prompt'=>'Please Select Section']) ?>

   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
