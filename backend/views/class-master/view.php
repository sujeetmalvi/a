<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ClassMaster */
?>
<div class="class-master-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
          //  'id',
            'name',
            [
                'attribute'=>'status',
                'value' => $model->status == 1 ? 'Active' : 'Inactive'
            ]
        ],
    ]) ?>

</div>
