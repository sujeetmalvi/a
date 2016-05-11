<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\RouteImmediateStations */

$this->title = Yii::t('app', 'Create Route Immediate Stations');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Route Immediate Stations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="route-immediate-stations-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
