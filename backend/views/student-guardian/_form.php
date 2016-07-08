<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\StudentGuardian */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-guardian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fathername')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mothername')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fatheroccupation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'motheroccupation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fathereducation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'monthereducation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fathercontact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mothercontact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
