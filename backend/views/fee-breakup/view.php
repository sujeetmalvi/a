<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\FeeBreakup */
?>
<div class="fee-breakup-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'fee_type_id',
            'name',
            'amt',
            'class_id',
        ],
    ]) ?>

</div>
