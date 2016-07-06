<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\PaymentMode */
?>
<div class="payment-mode-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'mode',
        ],
    ]) ?>

</div>
