<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\StaffAddressPermanent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="staff-address-permanent-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'staff_id')->textInput() ?>

    <?= $form->field($model, 'h_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'street_address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'post_office')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'district_id')->textInput() ?>

    <?= $form->field($model, 'state_id')->textInput() ?>

    <?= $form->field($model, 'country_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
