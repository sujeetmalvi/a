<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TimeClassTeacherDuration */

$this->title = Yii::t('app', 'Create Time Class Teacher Duration');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Time Class Teacher Durations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="time-class-teacher-duration-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
