<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SchoolDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="school-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'school_id')->textInput() ?>

    <?= $form->field($model, 'name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'registration_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'affilated_to')->textInput() ?>

    <?= $form->field($model, 'from_class')->textInput() ?>

    <?= $form->field($model, 'to_class')->textInput() ?>

    <?= $form->field($model, 'admin_username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'admin_password')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hostel')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
