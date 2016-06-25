<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datecontrol\DateControl;
use kartik\widgets\FileInput;

/* @var $this yii\web\View */
/* @var $model backend\models\StudentMaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-master-form">
    <?php // if(isset($exception))echo $exception->getMessage();     ?>
    <?php $form = ActiveForm::begin([ 'options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'addmission_no')->textInput(['value' =>$adm_no,'readonly'=>'readonly']) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'do')->widget(DateControl::classname(), [
        'type'=>DateControl::FORMAT_DATE,
        'ajaxConversion'=>true,
        'options' => [
            'pluginOptions' => [
                'autoclose' => true
            ]
        ]
    ]); ?>

    <?= $form->field($model, 'gender')->dropDownList([ 'male' => 'Male', 'female' => 'Female', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'photo')->widget(FileInput::classname(), [
        'options' => ['accept' => 'image/*'],
    ]); ?>

    <?= $form->field($model, 'contact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'catagory')->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\StudentCatagory::find()->all(),'id','name'),['prompt'=>'Please Select Catagory']) ?>

    <?= $form->field($model, 'from_session')->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\Session::find()->all(),'id','sortname')) ?>







<!--    education details -->

    <?= $form->field($education, 'class_id')->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\ClassMaster::find()->all(),'id','name'),['prompt'=>'Select Class',
        'onchange'=>'$.post( "index.php?r=section/lists&id='.'"+$(this).val(), function( data ){
                                         $( "select#studenteducation-section_id" ).html( data );
                                           });',]) ?>

    <?= $form->field($education, 'section_id')->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\Section::find()->all(),'id','name'),
        ['prompt'=>'Select Section']) ?>

<!--    transport details-->

    <?= $form->field($transport, 'route_id')->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\Route::find()->all(),
        'id','end_point'),['prompt'=>'Select Route',
        'onchange'=>'$.post( "index.php?r=route-immediate-stations/lists&id='.'"+$(this).val(), function( data ){
                                         $( "select#studenttransport-station_id" ).html( data );
                                           });'
    ]) ?>

    <?= $form->field($transport, 'station_id')->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\RouteImmediateStations::find()->all(),'id','name'),['prompt'=>'Select Intermediate Station']) ?>

<!--   address details-->

    <?= $form->field($address, 'h_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($address, 'street_address')->textarea(['rows' => 6]) ?>

    <?= $form->field($address, 'post_office')->textInput(['maxlength' => true]) ?>

    <?= $form->field($address, 'country')->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\Country::find()->all(),'id','name'),['prompt'=>'Please Select Country',
        'onchange'=>'$.post( "index.php?r=state/lists&id='.'"+$(this).val(), function( data ){
                                         $( "select#studentaddress-state" ).html( data );
                                           });'
    ]) ?>


    <?= $form->field($address, 'state')->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\State::find()->all(),'id','name'),[
        'prompt'=>'Please Select State',
        'onchange'=>'$.post( "index.php?r=district/lists&id='.'"+$(this).val(), function( data ){
                                         $( "select#studentaddress-district" ).html( data );
                                           });'
    ]) ?>

    <?= $form->field($address, 'district')->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\District::find()->all(),'id','name'),['prompt'=>'Select District'])  ?>




    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
