<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Arrayhelper;
use backend\models\ClassMaster;
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

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'adm_no') ?>

    <?php // echo $form->field($model, 'dob') ?>

    <?= $form->field($model, 'gender')->dropDownlist([''=>'Gender','male'=>'male','female'=>'female']) ?>

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

    <?php  echo $form->field($model, 'cur_contact') ?>

    <?php // echo $form->field($model, 'per_h_no') ?>

    <?php // echo $form->field($model, 'per_street_address') ?>

    <?php // echo $form->field($model, 'per_area') ?>

    <?php // echo $form->field($model, 'per_po') ?>

    <?php // echo $form->field($model, 'per_district') ?>

    <?php // echo $form->field($model, 'per_state') ?>

    <?php // echo $form->field($model, 'per_pincode') ?>

    <?php // echo $form->field($model, 'per_contact') ?>

    <?php  echo $form->field($model, 'class')->dropDownlist(Arrayhelper::map(ClassMaster::find()->all(),'id','name'),['prompt'=>' Class']) ?>

    <?php  echo $form->field($model, 'section') ?>

    <?php  echo $form->field($model, 'roll_no') ?>

    <?php // echo $form->field($model, 'transport_status') ?>

    <?php // echo $form->field($model, 'catagory') ?>

    <?php // echo $form->field($model, 'physically_disabled') ?>

    <?php // echo $form->field($model, 'special_discount') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
