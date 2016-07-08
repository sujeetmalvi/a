<?php
/**
 * Created by PhpStorm.
 * User: Ritesh Singh
 * Date: 7/7/2016
 * Time: 9:03 PM
 */
use yii\helpers\Html;
?>
<div class="row" style="margin-left: auto; margin-right: auto;">
<div class="col-md-3">
    <?= $form->field($transport, 'route_id',[
        'template' => '<span class="star">*</span>{label} <div class="row"><div class="col-sm-12">{input}{error}{hint}</div></div>'
    ])->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\Route::find()->all(),
        'id','end_point'),['prompt'=>'Select Route',
        'onchange'=>'$.post( "index.php?r=route-immediate-stations/lists&id='.'"+$(this).val(), function( data ){
                                         $( "select#studenttransport-station_id" ).html( data );
                                           });'
    ]) ?>

    <?= $form->field($transport, 'station_id',[
        'template' => '<span class="star">*</span>{label} <div class="row"><div class="col-sm-12">{input}{error}{hint}</div></div>'
    ])->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\RouteImmediateStations::find()->all(),'id','name'),['prompt'=>'Select Intermediate Station']) ?>

</div>
    </div>
<div class="row" style="margin-left: auto; margin-right: auto;">
    <div class="col-md-12">
<div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
</div>
        </div>
    </div>

