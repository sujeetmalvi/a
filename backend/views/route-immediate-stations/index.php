<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\Route;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\RouteImmediateStationsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Route Immediate Stations');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="route-immediate-stations-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Route Immediate Stations'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'route_id',
            [
                'attribute'=>'route_id',
                'value'=>'route.end_point',
                'filter'=>Html::activeDropDownList($searchModel,'route_id',ArrayHelper::map(Route::find()->all(),'id','end_point'),[
                        'prompt'=>'Please Select Route For Filter',
                        'class'=>'form-control'
                    ]),
            ],
            'name',
            'created_at',
            'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
