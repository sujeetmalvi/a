<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\EmployeeEducationDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-education-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'employee_id')->textInput() ?>

    <?= $form->field($model, 'metric_board')->textInput() ?>

    <?= $form->field($model, 'inter_board')->textInput() ?>

    <?= $form->field($model, 'metric_per')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inter_per')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'graduation_university')->textInput() ?>

    <?= $form->field($model, 'graducation_type')->textInput() ?>

    <?= $form->field($model, 'graducation_per')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'post_graducation_per')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'post_graducation_university')->textInput() ?>

    <?= $form->field($model, 'post_graduaction_type')->textInput() ?>

    <?= $form->field($model, 'JBT')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'NTT')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
