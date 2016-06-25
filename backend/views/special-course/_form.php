<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SpecialCourse */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="special-course-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'course_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'course_start_date')->textInput() ?>

    <?= $form->field($model, 'course_end_date')->textInput() ?>

    <?= $form->field($model, 'course_duration')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'course-fee')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'for_class')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'compulsary')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'session_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
