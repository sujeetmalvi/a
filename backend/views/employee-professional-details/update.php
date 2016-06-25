<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\EmployeeProfessionalDetails */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Employee Professional Details',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Employee Professional Details'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="employee-professional-details-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
