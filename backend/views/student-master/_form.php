<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\StudentMaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-master-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adm_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dob')->textInput() ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bloog_group')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stu_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'f_occupation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'm_occupation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parent_contact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parent_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cur_h_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cur_street_address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cur_area')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cur_po')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cur_district')->textInput() ?>

    <?= $form->field($model, 'cur_state')->textInput() ?>

    <?= $form->field($model, 'cur_pincode')->textInput() ?>

    <?= $form->field($model, 'cur_contact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'per_h_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'per_street_address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'per_area')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'per_po')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'per_district')->textInput() ?>

    <?= $form->field($model, 'per_state')->textInput() ?>

    <?= $form->field($model, 'per_pincode')->textInput() ?>

    <?= $form->field($model, 'per_contact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'class')->textInput() ?>

    <?= $form->field($model, 'section')->textInput() ?>

    <?= $form->field($model, 'roll_no')->textInput() ?>

    <?= $form->field($model, 'transport_status')->dropDownList([ 'school' => 'School', 'self' => 'Self', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'catagory')->textInput() ?>

    <?= $form->field($model, 'physically_disabled')->textInput() ?>

    <?= $form->field($model, 'special_discount')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
