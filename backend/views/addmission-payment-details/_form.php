<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AddmissionPaymentDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="addmission-payment-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'student_id')->textInput(['value'=>$student->id,'readonly' =>'readonly']) ?>

    <?= $form->field($model, 'class_id')->hiddenInput(['value'=>$class_id])->label(false) ?>

    <?= $form->field($model, 'amt')->textInput(['readonly' =>'readonly','value'=>$amt]) ?>

    <?= $form->field($model, 'pay_mode')->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\PaymentMode::find()->all(),'id','mode'),['prompt'=>'Please Select Payment mode']) ?>

    <?= $form->field($model, 'pay_mode_detail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'remarks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'session_id')->hiddenInput(['value'=>$student->from_session])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
