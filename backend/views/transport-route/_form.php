<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Arrayhelper;
use backend\models\Transport;
use backend\models\Route;

/* @var $this yii\web\View */
/* @var $model backend\models\TransportRoute */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transport-route-form">

    <?php $form = ActiveForm::begin(); ?>


	<?= $form->field($model, 'transport_id')->dropDownList(Arrayhelper::map(Transport::find()->all(),'id','number_plate'),['prompt'=>'Select Transport Number']) ?>

	<?= $form->field($model, 'route_id')->dropDownList(Arrayhelper::map(Route::find()->all(),'id','end_point'),['prompt'=>'Select Route']) ?>



	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
