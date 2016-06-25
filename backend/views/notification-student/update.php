<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NotificationStudent */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Notification Student',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Notification Students'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="notification-student-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
