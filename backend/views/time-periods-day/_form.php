<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TimePeriodsDay */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="time-periods-day-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'student_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'session_id')->textInput() ?>

    <?= $form->field($model, 'monday')->textInput() ?>

    <?= $form->field($model, 'tuesday')->textInput() ?>

    <?= $form->field($model, 'wednesday')->textInput() ?>

    <?= $form->field($model, 'thursday')->textInput() ?>

    <?= $form->field($model, 'friday')->textInput() ?>

    <?= $form->field($model, 'saturday')->textInput() ?>

    <?= $form->field($model, 'time_table_id')->textInput() ?>

    <?= $form->field($model, 'created_on')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
