<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\StudentGuardianSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-guardian-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fathername') ?>

    <?= $form->field($model, 'mothername') ?>

    <?= $form->field($model, 'fatheroccupation') ?>

    <?= $form->field($model, 'motheroccupation') ?>

    <?php // echo $form->field($model, 'fathereducation') ?>

    <?php // echo $form->field($model, 'monthereducation') ?>

    <?php // echo $form->field($model, 'fathercontact') ?>

    <?php // echo $form->field($model, 'mothercontact') ?>

    <?php // echo $form->field($model, 'email') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
