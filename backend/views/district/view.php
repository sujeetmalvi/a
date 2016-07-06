<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\District */
?>
<div class="district-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'id',
            'name',
           // 'state_id',
            [
              'attribute'=>'state_id',
              'value'=> $model->state->name,
            ],
        ],
    ]) ?>

</div>
