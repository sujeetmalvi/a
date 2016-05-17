<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\StudentAdmission;
use backend\models\PaymentMode;
use yii\helpers\Arrayhelper;
/* @var $this yii\web\View */
/* @var $model backend\models\StudentAdmission */
/* @var $form yii\widgets\ActiveForm */
$sta=new StudentAdmission();
//$all=$sta->getStudent($id);
?>

<div class="student-admission-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6">

        <div class="panel panel-primary">
          <div class="panel-heading">Admission Fee Details</div>
          <div class="panel-body">
            <?= $form->field($model, 'student_id')->hiddenInput(['value'=>$id])->label(false) ?>
            <?php $per=$sta->getStudent($id); ?>
            <?= $form->field($model, 'fee_amt')->textInput(['readonly'=>'readonly','value'=>$per]) ?>
            <?php 
                    $discount=$sta->getDiscount($id);
                    $perc=($per*$discount)/100;

                    $total=$per-$perc;


            ?>
            <?= $form->field($model, 'discount')->textInput(['readonly'=>'readonly','value'=>$discount]) ?>
            <?= $form->field($model, 'discount_amt')->textInput(['readonly'=>'readonly','value'=>$total]) ?>
            

          </div>
        </div>
        </div>
        <div class="col-md-6">

        <div class="panel panel-primary">
          <div class="panel-heading">Payment Details</div>
          <div class="panel-body">
            <?= $form->field($model, 'paid_fee')->textInput() ?>
            <?= $form->field($model, 'pay_mode')->dropdownList(Arrayhelper::map(PaymentMode::find()->all(),'id','mode'),[
                'prompt'=>'Please Select'
            ]) ?>
          </div>
        </div>
        </div>
    </div>    

   

   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Save And Continue') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
