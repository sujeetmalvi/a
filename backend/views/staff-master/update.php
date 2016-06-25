<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\StaffMaster */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Staff Master',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Staff Masters'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="staff-master-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
