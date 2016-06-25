<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TimeClassTeacherDuration */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="time-class-teacher-duration-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'duration')->textInput() ?>

    <?= $form->field($model, 'per_week')->textInput() ?>

    <?= $form->field($model, 'time_table_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
