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
            <?php $per=$sta->getStudent($id);
                  $hint='Admission = '.$per;

                  $transport=$sta->getTransport($id);
                //  echo $transport;
                  if($transport != 0){
                   $hint ='Admission = '.$per.' + Transport = '.$transport ; 
                  }
                  $total_amount=$per+$transport;

             ?>
            <?= $form->field($model, 'fee_amt')->textInput(['readonly'=>'readonly','value'=>$total_amount])->hint($hint) ?>
            <?php 
                    $discount=$sta->getDiscount($id);
                    $perc=($total_amount*$discount)/100;

                    $total=$total_amount-$perc;


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
          <input type="checkbox" id="full"> &nbsp;&nbsp;&nbsp;&nbsp;Full</input>
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
<?php $this->registerJS(" $(document).ready(function () {
    $('#full').change(function () { 
        if($(this).is(':checked')){
            $('#studentadmission-paid_fee').val($('#studentadmission-discount_amt').val());
        }else{
             $('#studentadmission-paid_fee').val('');
        }


    })
        
   })");