<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datecontrol\DateControl;
use kartik\widgets\FileInput;
use kartik\tabs\TabsX;

/* @var $this yii\web\View */
/* @var $model backend\models\StudentMaster */
/* @var $form yii\widgets\ActiveForm */
?>
<?php //print_r($exception); ?>
<div class="student-master-form">
<?php $form = ActiveForm::begin([ 'options'=>['enctype'=>'multipart/form-data']]); ?>

    <?php
    $wizard_config = [
        'id' => 'stepwizard',
        'steps' => [
            1 => [
                'title' => 'Basic information',
                'icon' => 'glyphicon glyphicon-user',
                'content' => $this->render('_basic',['model'=>$model,'form'=>$form,'adm_no'=>$adm_no]),

            ],
            2 => [
                'title' => 'Address Details',
                'icon' => 'glyphicon glyphicon-home',
                'content' => $this->render('_address',['address'=>$address,'form'=>$form,'adm_no'=>$adm_no]),
                'skippable' => false,
            ],
            3 => [
                'title' => 'Guardian information',
                'icon' => 'glyphicon glyphicon-eye-open',
                'content' => $this->render('_parent',['guardian'=>$guardian,'form'=>$form,'adm_no'=>$adm_no]),
                'skippable' => false,
            ],
            4 => [
                'title' => 'Academic Details',
                'icon' => 'glyphicon glyphicon-cloud-upload',
                'content' => $this->render('_education',['education'=>$education,'form'=>$form,'adm_no'=>$adm_no]),
                'skippable' => false,
            ],
            5 => [
                'title' => 'Transport Details',
                'icon' => 'glyphicon glyphicon-transfer',
                'content' =>$this->render('_transport',['model'=>$model,'transport'=>$transport,'form'=>$form,'adm_no'=>$adm_no]),
            ],
        ],
        //'complete_content' => "You are done!", // Optional final screen
        'start_step' => 1, // Optional, start with a specific step
    ];
    ?>


    <?= \drsdre\wizardwidget\WizardWidget::widget($wizard_config); ?>

    </div>


    <?php ActiveForm::end(); ?>
