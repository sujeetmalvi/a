<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\NotificationStudent */

$this->title = Yii::t('app', 'Create Notification Student');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Notification Students'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="notification-student-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
