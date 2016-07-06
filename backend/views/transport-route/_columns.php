<?php
use yii\helpers\Url;
use yii\helpers\Html;
use backend\models\Transport;
use backend\models\Route;
use yii\helpers\ArrayHelper;

return [
    [
        'class' => 'kartik\grid\CheckboxColumn',
        'width' => '20px',
    ],
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
        // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'id',
    // ],
    [
        'attribute'=>'transport_id',
        'value'=>'transport.number_plate',
        'filter'=>Html::activedropDownlist($searchModel,'transport_id',ArrayHelper::map(Transport::find()->all(),'id','number_plate'),['prompt'=>'Select Transport','class'=>'form-control']),
    ],
    //  'route_id',
    [
        'attribute'=>'route_id',
        'value'=>'route.end_point',
        'filter'=>Html::activedropDownlist($searchModel,'route_id',ArrayHelper::map(Route::find()->all(),'id','end_point'),['prompt'=>'Select Route','class'=>'form-control']),
    ],

    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) { 
                return Url::to([$action,'id'=>$key]);
        },
        'viewOptions'=>['role'=>'modal-remote','title'=>'View','data-toggle'=>'tooltip'],
        'updateOptions'=>['role'=>'modal-remote','title'=>'Update', 'data-toggle'=>'tooltip'],
        'deleteOptions'=>['role'=>'modal-remote','title'=>'Delete', 
                          'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                          'data-request-method'=>'post',
                          'data-toggle'=>'tooltip',
                          'data-confirm-title'=>'Are you sure?',
                          'data-confirm-message'=>'Are you sure want to delete this item'], 
    ],

];   