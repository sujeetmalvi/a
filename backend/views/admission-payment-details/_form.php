<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AdmissionPaymentDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admission-payment-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'stu_id')->textInput() ?>

    <?= $form->field($model, 'adm_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cheq_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cheq_dt')->textInput() ?>

    <?= $form->field($model, 'bank_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
