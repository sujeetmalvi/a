<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Transport */
?>
<div class="transport-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
           // 'status',
            [
                'attribute'=>'status',
                'value'=>$model->status == 1 ? 'Active' : 'Inactive',
            ],
            'number_plate',
        ],
    ]) ?>

</div>
