<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ClassSectionRelation */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Class Section Relation',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Class Section Relations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="class-section-relation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
