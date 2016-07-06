<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\FeeBreakup */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fee-breakup-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fee_type_id')->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\FeeType::find()->all(),'id','name'),['prompt'=>'Select Fee Type']) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amt')->textInput() ?>

    <?= $form->field($model, 'class_id')->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\ClassMaster::find()->all(),'id','name'),['prompt'=>'Please Select Class']) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
