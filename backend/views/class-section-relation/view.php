<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ClassSectionRelation */
?>
<div class="class-section-relation-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'class_id',
            'section_id',
        ],
    ]) ?>

</div>
