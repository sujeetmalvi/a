<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\RouteImmediateStations */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Route Immediate Stations',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Route Immediate Stations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="route-immediate-stations-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
