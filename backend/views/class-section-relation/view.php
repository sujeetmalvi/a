<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ClassSectionRelation */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Class Section Relations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="class-section-relation-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
           // 'class_id',
            [
                'attribute' => 'class_id',
                'value' => $model->class->name
            ],
            [
                'attribute' => 'section_id',
                'value' => $model->section->name
            ],
          //  'section_id',
         //   'created_at',
         //   'updated_at',
        ],
    ]) ?>

</div>
