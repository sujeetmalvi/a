<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\State */
?>
<div class="state-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'country_id',
        ],
    ]) ?>

</div>
