<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\RouteImmediateStations */
?>
<div class="route-immediate-stations-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'route_id',
            [
                'attribute'=>'route_id',
                'value'=>$model->route->end_point,
            ],
            'name',
        ],
    ]) ?>

</div>
