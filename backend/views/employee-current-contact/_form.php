<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\EmployeeCurrentContact */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-current-contact-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'permanent_address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'permanent_p_office')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'permanent_district_id')->textInput() ?>

    <?= $form->field($model, 'permanent_district_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'permanent_pin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'permanent_state_id')->textInput() ?>

    <?= $form->field($model, 'permanent_state_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
