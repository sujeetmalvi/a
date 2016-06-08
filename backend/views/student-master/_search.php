<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Arrayhelper;
use backend\models\ClassMaster;
use backend\models\Section;
/* @var $this yii\web\View */
/* @var $model backend\models\StudentMasterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-master-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php // $form->field($model, 'id') ?>
    <div class="panel panel-success">

    <div class="panel-body">
    <div class="row">
    <div class="col-md-3">
    <?= $form->field($model, 'name') ?>
    </div>
    <div class="col-md-3">
    <?= $form->field($model, 'adm_no') ?>
    </div>
    <?php // echo $form->field($model, 'dob') ?>
    <div class="col-md-3">
    <?= $form->field($model, 'gender')->dropDownlist([''=>'Gender','male'=>'male','female'=>'female']) ?>
    </div>
    <?php // echo $form->field($model, 'bloog_group') ?>

    <?php // echo $form->field($model, 'stu_email') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'fname') ?>

    <?php // echo $form->field($model, 'mname') ?>

    <?php // echo $form->field($model, 'f_occupation') ?>

    <?php // echo $form->field($model, 'm_occupation') ?>

    <?php // echo $form->field($model, 'parent_contact') ?>

    <?php // echo $form->field($model, 'parent_email') ?>

    <?php // echo $form->field($model, 'cur_h_no') ?>

    <?php // echo $form->field($model, 'cur_street_address') ?>

    <?php // echo $form->field($model, 'cur_area') ?>

    <?php // echo $form->field($model, 'cur_po') ?>

    <?php // echo $form->field($model, 'cur_district') ?>

    <?php // echo $form->field($model, 'cur_state') ?>

    <?php // echo $form->field($model, 'cur_pincode') ?>
    <div class="col-md-3">
    <?php  echo $form->field($model, 'cur_contact') ?>
    </div>
    </div>
    <div class="row">
    <?php // echo $form->field($model, 'per_h_no') ?>

    <?php // echo $form->field($model, 'per_street_address') ?>

    <?php // echo $form->field($model, 'per_area') ?>

    <?php // echo $form->field($model, 'per_po') ?>

    <?php // echo $form->field($model, 'per_district') ?>

    <?php // echo $form->field($model, 'per_state') ?>

    <?php // echo $form->field($model, 'per_pincode') ?>

    <?php // echo $form->field($model, 'per_contact') ?>
    <div class="col-md-4">
    <?php  echo $form->field($model, 'class')->dropDownlist(Arrayhelper::map(ClassMaster::find()->all(),'id','name'),['prompt'=>' Select Class',  'onchange'=>'$.post( "index.php?r=class-section-relation/lists&id='.'"+$(this).val(), function( data ){
                                         $( "select#studentmastersearch-section" ).html( data );
                                           });']) ?>
    </div>
    <div class="col-md-4">
    <?php  echo $form->field($model, 'section')->dropDownlist(Arrayhelper::map(Section::find()->all(),'id','name'),[
            'prompt'=>'Select Section'
        ]) ?>
    </div>
    <div class="col-md-4">
    <?php  echo $form->field($model, 'roll_no') ?>
    </div>
    <?php // echo $form->field($model, 'transport_status') ?>

    <?php // echo $form->field($model, 'catagory') ?>

    <?php // echo $form->field($model, 'physically_disabled') ?>

    <?php // echo $form->field($model, 'special_discount') ?>

    <?php // echo $form->field($model, 'created_at') ?>
    <div class="col-md-6">
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>
    </div>
    </div>
    </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
