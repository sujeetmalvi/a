<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\Transport;
use backend\models\Route;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\TransportRouteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Transport Routes');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transport-route-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Add New Transport Route'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',
           // 'transport_id',
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

           // 'created_at',
           // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
