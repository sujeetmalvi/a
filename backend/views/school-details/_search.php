<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SchoolDetailsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="school-details-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'school_id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'address') ?>

    <?= $form->field($model, 'registration_no') ?>

    <?php // echo $form->field($model, 'affilated_to') ?>

    <?php // echo $form->field($model, 'from_class') ?>

    <?php // echo $form->field($model, 'to_class') ?>

    <?php // echo $form->field($model, 'admin_username') ?>

    <?php // echo $form->field($model, 'admin_password') ?>

    <?php // echo $form->field($model, 'hostel') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
