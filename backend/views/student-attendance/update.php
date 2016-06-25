<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\StudentAttendance */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Student Attendance',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Student Attendances'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="student-attendance-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
