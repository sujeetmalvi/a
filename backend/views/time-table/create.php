<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TimeTable */

$this->title = Yii::t('app', 'Create Time Table');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Time Tables'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="time-table-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
