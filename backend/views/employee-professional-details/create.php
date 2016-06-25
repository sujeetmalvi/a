<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\EmployeeProfessionalDetails */

$this->title = Yii::t('app', 'Create Employee Professional Details');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Employee Professional Details'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-professional-details-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
