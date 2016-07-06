<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\University */
?>
<div class="university-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name:ntext',
        ],
    ]) ?>

</div>
