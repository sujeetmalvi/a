<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DayTable */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Day Table',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Day Tables'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="day-table-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
