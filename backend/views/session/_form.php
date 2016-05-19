<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;
/* @var $this yii\web\View */
/* @var $model backend\models\Session */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="session-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'start_date')->widget(DatePicker::classname(), [
                'options' => ['placeholder' => 'Enter Start date ...'],
                'pluginOptions' => [
                    'autoclose'=>true,
                    'format' => 'yyyy-mm-dd'
                ]
            ]);  ?>

    <?= $form->field($model, 'end_date')->widget(DatePicker::classname(), [
                'options' => ['placeholder' => 'Enter End date ...'],
                'pluginOptions' => [
                    'autoclose'=>true,
                    'format' => 'yyyy-mm-dd'
                ]
            ]);  ?>

    <?= $form->field($model, 'sortname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Active' => 'Active', 'Inactive' => 'Inactive', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
