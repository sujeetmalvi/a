<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SpecialCourseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="special-course-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'course_name') ?>

    <?= $form->field($model, 'course_start_date') ?>

    <?= $form->field($model, 'course_end_date') ?>

    <?= $form->field($model, 'course_duration') ?>

    <?php // echo $form->field($model, 'course-fee') ?>

    <?php // echo $form->field($model, 'for_class') ?>

    <?php // echo $form->field($model, 'compulsary') ?>

    <?php // echo $form->field($model, 'session_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
