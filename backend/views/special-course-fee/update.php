<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SpecialCourseFee */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Special Course Fee',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Special Course Fees'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="special-course-fee-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
