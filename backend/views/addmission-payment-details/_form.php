<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AddmissionPaymentDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="addmission-payment-details-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="panel panel-primary">
        <div class="panel-body">
        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'student_id')->textInput(['value'=>$student->id,'readonly' =>'readonly']) ?>

                <?= $form->field($model, 'class_id')->hiddenInput(['value'=>$class_id])->label(false) ?>

            </div>
            <div class="col-md-4">

                <?= $form->field($model, 'pay_mode_detail')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'remarks')->textarea(['rows' => 6]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'amt')->textInput(['readonly' =>'readonly','value'=>$amt]) ?>

                <?= $form->field($model, 'pay_mode')->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\PaymentMode::find()->all(),'id','mode'),['prompt'=>'Please Select Payment mode']) ?>

            </div>



            </div>




    <?= $form->field($model, 'session_id')->hiddenInput(['value'=>$student->from_session])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
</div>
 </div>


    <?php ActiveForm::end(); ?>

</div>
