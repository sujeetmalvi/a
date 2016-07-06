<?php
use yii\helpers\Url;
use yii\helpers\Html;
//use yii\grid\GridView;
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
        'attribute'=> 'fee_type_id',
        'value'=>'feeType.name',
        'filter' => Html::activeDropDownList($searchModel, 'fee_type_id', ArrayHelper::map(\backend\models\FeeType::find()->all(), 'id', 'name'),['class'=>'form-control','prompt' => 'Select Fee Type to filter'])
    ],
    [
        'attribute'=> 'class_id',
        'value'=>'classname.name',
        'filter' => Html::activeDropDownList($searchModel, 'class_id', ArrayHelper::map(\backend\models\ClassMaster::find()->all(), 'id', 'name'),['class'=>'form-control','prompt' => 'Select Class to filter'])
    ],
    'name',
    [
        'attribute'=>'amt',
        'pageSummary'=>true,

    ],
    //'amt',
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