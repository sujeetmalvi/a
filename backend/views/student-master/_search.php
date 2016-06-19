<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\StudentMasterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-master-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'do') ?>

    <?= $form->field($model, 'gender') ?>

    <?= $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'contact') ?>

    <?php // echo $form->field($model, 'from_session') ?>

    <?php // echo $form->field($model, 'to_session') ?>

    <?php // echo $form->field($model, 'addmission_no') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
