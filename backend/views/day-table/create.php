<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\DayTable */

$this->title = Yii::t('app', 'Create Day Table');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Day Tables'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="day-table-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
