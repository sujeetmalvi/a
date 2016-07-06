<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\FeeMaster */
?>
<div class="fee-master-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute'=>'class_id',
                'value'=>$model->class->name,
            ],
            'name',
            [
                'attribute'=>'type_id',
                'value'=>$model->type->name,
            ],

        ],
    ]) ?>

</div>
