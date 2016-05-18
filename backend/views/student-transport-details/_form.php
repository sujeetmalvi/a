<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Arrayhelper;
use backend\models\StudentMaster;
use backend\models\Route;
use backend\models\RouteImmediateStations;
use kartik\datecontrol\DateControl;



/* @var $this yii\web\View */
/* @var $model backend\models\StudentTransportDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-transport-details-form">

    <?php $form = ActiveForm::begin(); ?>

   
   <?= $form->field($model, 'student_id')->hiddenInput(['value'=>$id,'readonly'=>'readonly'])->label(false) ?>
    <?= $form->field($model, 'route_id')->dropDownList(Arrayhelper::map(Route::find()->all(),'id','end_point'),[
                'prompt'=>'Please Select Route',
                'onchange'=>'$.post( "index.php?r=route-immediate-stations/lists&id='.'"+$(this).val(), function( data ){
                                         $( "select#studenttransportdetails-station_id" ).html( data );
                                           });'
    ]) ?>

    <?= $form->field($model, 'station_id')->dropDownList(Arrayhelper::map(RouteImmediateStations::find()->all(),'id','name'),['prompt'=>'Please Select']) ?>

 

    <?= $form->field($model, 'start_date')->widget(DateControl::classname(), [
    'displayFormat' => 'php:Y-m-d',
    'type'=>DateControl::FORMAT_DATE
]);?>

   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
