<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\StudentAddress */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-address-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'student_id')->textInput() ?>

    <?= $form->field($model, 'h_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'street_address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'post_office')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'district')->textInput() ?>

    <?= $form->field($model, 'state')->textInput() ?>

    <?= $form->field($model, 'country')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
