<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Route */
?>
<div class="route-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'starting_point',
            'end_point',
        ],
    ]) ?>

</div>
