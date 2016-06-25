<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TimePeriodsDay */

$this->title = Yii::t('app', 'Create Time Periods Day');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Time Periods Days'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="time-periods-day-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
