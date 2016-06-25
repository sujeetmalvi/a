<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\EmployeePermanentContactSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-permanent-contact-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'permanent_address') ?>

    <?= $form->field($model, 'permanent_p_office') ?>

    <?= $form->field($model, 'permanent_district_id') ?>

    <?= $form->field($model, 'permanent_district_name') ?>

    <?php // echo $form->field($model, 'permanent_pin') ?>

    <?php // echo $form->field($model, 'permanent_state_id') ?>

    <?php // echo $form->field($model, 'permanent_state_name') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
