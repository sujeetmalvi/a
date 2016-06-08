<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
//use kartik\widgets\ActiveForm;
use yii\helpers\Arrayhelper;
use backend\models\State;
use backend\models\District;
use kartik\widgets\DatePicker;
use backend\models\ClassMaster;
use backend\models\Section;
use backend\models\StudentCatagory;
use backend\models\Session;
use kartik\widgets\FileInput


/* @var $this yii\web\View */
/* @var $model backend\models\StudentMaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-master-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-12">
      <?=$form->field($model,'session_id')->dropDownList(Arrayhelper::map(Session::find()->all(),'id','sortname'),['prompt'=>'Select Session'])?> 
      </div> 
    </div>
    <div class="row">
        <div class="col-md-4">

        <div class="panel panel-primary">
          <div class="panel-heading">Student Personal Details</div>
          <div class="panel-body">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'dob')->widget(DatePicker::classname(), [
                'options' => ['placeholder' => 'Enter birth date ...'],
                'pluginOptions' => [
                    'autoclose'=>true,
                    'format' => 'yyyy-mm-dd'
                ]
            ]); ?>
            <?= $form->field($model, 'gender')->dropDownList(['Male'=>'Male','Female'=>'Female']) ?>
            <?= $form->field($model, 'bloog_group')->dropDownList([''=>'Please Select Blood Group','A1-'=>'A1-',
                    'A1+'=>'A1+','A2-'=>'A2-','A2+'=>'A2+','B-'=>'B-','B+'=>'B+','O-'=>'O-','O+'=>'0+']) ?>
            <?= $form->field($model, 'stu_email')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'photo')->widget(FileInput::classname(), [
                                 'options' => ['accept' => 'image/*'],
            ]); ?>
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
            <?= $form->field($model, 'parent_contact')->textInput(['maxlength' => 10]) ?>
            <?= $form->field($model, 'parent_email')->textInput(['maxlength' => true]) ?>

          </div>
          </div>
        </div>
          <div class="col-md-4">
            <div class="panel panel-success">
            <div class="panel-heading">Other Details</div>
            <div class="panel-body">
            <?= $form->field($model, 'class')->dropDownList(Arrayhelper::map(ClassMaster::find()->all(),'id','name'),['prompt'=>'
                Please Select',
                'onchange'=>'$.post( "index.php?r=section/lists&id='.'"+$(this).val(), function( data ){
                                         $( "select#studentmaster-section" ).html( data );
                                           });',
                ]) ?>
            <?= $form->field($model, 'section')->dropDownList(Arrayhelper::map(Section::find()->all(),'id','name'),['prompt'=>'
                Please Select']) ?>
            <?= $form->field($model, 'transport_status')->dropDownList([ 'school' => 'School', 'self' => 'Self', ], ['prompt' => 'Please Select']) ?>
            <?= $form->field($model, 'catagory')->dropDownList(Arrayhelper::map(StudentCatagory::find()->all(),'id','name'),
                [
                'prompt' => 'Please Select catagory'
                ]
            ) ?>
            <?= $form->field($model, 'physically_disabled')->dropDownList(['0'=>'No','1'=>'Yes']) ?>
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
            <?= $form->field($model, 'cur_pincode')->textInput(['maxlength'=>6]) ?>
            <?= $form->field($model, 'cur_contact')->textInput(['maxlength' => 10]) ?>
            
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
            <?= $form->field($model, 'per_pincode')->textInput(['maxlength'=>'6']) ?>
            <?= $form->field($model, 'per_contact')->textInput(['maxlength' => '10']) ?>
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
