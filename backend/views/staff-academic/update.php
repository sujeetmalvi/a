<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\StaffAcademic */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Staff Academic',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Staff Academics'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="staff-academic-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
