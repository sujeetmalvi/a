<?php
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use backend\models\ClassMaster;
use backend\models\Section;

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
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'class_id',
        'value'=>'class.name',
        'filter' => Html::activeDropDownList($searchModel, 'class_id', ArrayHelper::map(ClassMaster::find()->asArray()->all(), 'id', 'name'),['class'=>'form-control','prompt' => 'Select Class To Filter']),
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'section_id',
        'value'=>'section.name',
        'filter' => Html::activeDropDownList($searchModel, 'section_id', ArrayHelper::map(Section::find()->asArray()->all(), 'id', 'name'),['class'=>'form-control','prompt' => 'Select Section To Filter']),
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