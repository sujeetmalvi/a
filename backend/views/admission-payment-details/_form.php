<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\AdmissionPaymentDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admission-payment-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'stu_id')->hiddenInput(['value'=>$id])->label(false) ?>

    <?= $form->field($model, 'adm_id')->hiddenInput(['value' => $id])->label(false) ?>

    <?= $form->field($model, 'cheq_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cheq_dt')->widget(DatePicker::classname(), [
                'options' => ['placeholder' => 'Enter cheque date ...'],
                'pluginOptions' => [
                    'autoclose'=>true,
                    'format' => 'yyyy-mm-dd'
                ]
            ]); ?>

    <?= $form->field($model, 'bank_name')->textInput(['maxlength' => true]) ?>

   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
