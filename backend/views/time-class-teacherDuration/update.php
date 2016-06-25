<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TimeClassTeacherDuration */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Time Class Teacher Duration',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Time Class Teacher Durations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="time-class-teacher-duration-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
