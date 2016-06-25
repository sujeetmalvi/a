<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\EmployeeEducationDetailsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-education-details-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'employee_id') ?>

    <?= $form->field($model, 'metric_board') ?>

    <?= $form->field($model, 'inter_board') ?>

    <?= $form->field($model, 'metric_per') ?>

    <?php // echo $form->field($model, 'inter_per') ?>

    <?php // echo $form->field($model, 'graduation_university') ?>

    <?php // echo $form->field($model, 'graducation_type') ?>

    <?php // echo $form->field($model, 'graducation_per') ?>

    <?php // echo $form->field($model, 'post_graducation_per') ?>

    <?php // echo $form->field($model, 'post_graducation_university') ?>

    <?php // echo $form->field($model, 'post_graduaction_type') ?>

    <?php // echo $form->field($model, 'JBT') ?>

    <?php // echo $form->field($model, 'NTT') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
