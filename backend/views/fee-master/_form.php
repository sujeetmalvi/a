<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\ClassMaster;
use backend\models\FeeType;
/* @var $this yii\web\View */
/* @var $model backend\models\FeeMaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fee-master-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'class_id')->dropDownList(ArrayHelper::map(ClassMaster::find()->all(),'id','name'),['prompt'=>'Select Class']) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_id')->dropDownList(ArrayHelper::map(FeeType::find()->all(),'id','name'),
        ['prompt'=>'Please Select Fee Type']) ?>


  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
