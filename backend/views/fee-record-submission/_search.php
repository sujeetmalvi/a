<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\FeeRecordSubmissionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fee-record-submission-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'student_id') ?>

    <?= $form->field($model, 'session_id') ?>

    <?= $form->field($model, 'amount') ?>

    <?= $form->field($model, 'for_month') ?>

    <?php // echo $form->field($model, 'to_month') ?>

    <?php // echo $form->field($model, 'pay_mode_id') ?>

    <?php // echo $form->field($model, 'pay_mode-detail') ?>

    <?php // echo $form->field($model, 'remarks') ?>

    <?php // echo $form->field($model, 'emp_id') ?>

    <?php // echo $form->field($model, 'created_on') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
