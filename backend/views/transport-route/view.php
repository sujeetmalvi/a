<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\TransportRoute */
?>
<div class="transport-route-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'transport_id',
            'route_id',
        ],
    ]) ?>

</div>
