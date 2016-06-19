<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Route;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\RouteImmediateStations */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="route-immediate-stations-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'route_id')->dropDownList(ArrayHelper::map(Route::find()->all(),'id','end_point'),['prompt'=>'Please Select route']) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
