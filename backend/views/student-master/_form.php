<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Arrayhelper;
use backend\models\State;
use backend\models\District;


/* @var $this yii\web\View */
/* @var $model backend\models\StudentMaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-master-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-4">

        <div class="panel panel-primary">
          <div class="panel-heading">Student Personal Details</div>
          <div class="panel-body">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'dob')->textInput() ?>
            <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'bloog_group')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'stu_email')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>
              </div>
        </div>
        
        </div>
        <div class="col-md-4">

        <div class="panel panel-info">
          <div class="panel-heading">Parent Details</div>
          <div class="panel-body">
            <?= $form->field($model, 'fname')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'mname')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'f_occupation')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'm_occupation')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'parent_contact')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'parent_email')->textInput(['maxlength' => true]) ?>

          </div>
          </div>
        </div>
          <div class="col-md-4">
            <div class="panel panel-success">
            <div class="panel-heading">Other Details</div>
            <div class="panel-body">
            <?= $form->field($model, 'class')->textInput() ?>
            <?= $form->field($model, 'section')->textInput() ?>
            <?= $form->field($model, 'transport_status')->dropDownList([ 'school' => 'School', 'self' => 'Self', ], ['prompt' => 'Please Select']) ?>
            <?= $form->field($model, 'catagory')->textInput() ?>
            <?= $form->field($model, 'physically_disabled')->textInput() ?>
            <?= $form->field($model, 'special_discount')->textInput() ?>

            </div>
            </div>
        </div>
         
    </div> 
    <div class="row">
    <div class="col-md-6">
            <div class="panel panel-default">
            <div class="panel-heading">Current Address Details</div>
            <div class="panel-body">
            <div class="row">
            <div class="col-md-6">
            <?= $form->field($model, 'cur_h_no')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'cur_street_address')->textarea(['rows' => 8]) ?>
            <?= $form->field($model, 'cur_area')->textInput(['maxlength' => true]) ?>
            
            </div>
            <div class="col-md-6">
            <?= $form->field($model, 'cur_state')->dropDownList(Arrayhelper::map(State::find()->all(),'id','name'),[
                'prompt'=>'Please Select State',
                'onchange'=>'$.post( "index.php?r=district/lists&id='.'"+$(this).val(), function( data ){
                                         $( "select#studentmaster-cur_district" ).html( data );
                                           });'
            ]) ?>
            <?= $form->field($model, 'cur_district')->dropDownList(ArrayHelper::map(District::find()->all(),'id','name'),['prompt'=>'Select District'])  ?>
            <?= $form->field($model, 'cur_po')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'cur_pincode')->textInput() ?>
            <?= $form->field($model, 'cur_contact')->textInput(['maxlength' => true]) ?>
            
            </div>
            </div>

            </div>
            </div>
        </div>
         <div class="col-md-6">
            <div class="panel panel-primary">
            <div class="panel-heading">Permanent Address Details</div>
            <div class="panel-body">
            <div class="row">
            <div class="col-md-6">
            <?= $form->field($model, 'per_h_no')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'per_street_address')->textarea(['rows' => 8]) ?>
            <?= $form->field($model, 'per_area')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-6">
            <?= $form->field($model, 'per_state')->dropDownList(Arrayhelper::map(State::find()->all(),'id','name'),[
                'prompt'=>'Please Select State',
                'onchange'=>'$.post( "index.php?r=district/lists&id='.'"+$(this).val(), function( data ){
                                         $( "select#studentmaster-per_district" ).html( data );
                                           });'
            ]) ?>
            <?= $form->field($model, 'per_district')->dropDownList(ArrayHelper::map(District::find()->all(),'id','name'),['prompt'=>'Select District'])  ?>
            <?= $form->field($model, 'per_po')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'per_pincode')->textInput() ?>
            <?= $form->field($model, 'per_contact')->textInput(['maxlength' => true]) ?>
            </div>

            </div>
            </div>
        </div>

    
    </div>

    <div class="row">
        <div class="col-sm-5 col-sm-offset-5 ">
            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Save') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-lg btn-success' : 'btn btn-primary']) ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>    

</div>
