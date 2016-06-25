<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\EmployeePermanentContact */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Employee Permanent Contact',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Employee Permanent Contacts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="employee-permanent-contact-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
