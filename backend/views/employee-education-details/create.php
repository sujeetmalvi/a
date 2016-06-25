<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\EmployeeEducationDetails */

$this->title = Yii::t('app', 'Create Employee Education Details');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Employee Education Details'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-education-details-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
