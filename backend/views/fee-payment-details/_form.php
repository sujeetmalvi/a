<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\FeePaymentDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fee-payment-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fee_id')->textInput() ?>

    <?= $form->field($model, 'fee_type_id')->textInput() ?>

    <?= $form->field($model, 'amount')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
