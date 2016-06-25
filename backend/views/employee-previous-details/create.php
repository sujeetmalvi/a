<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\EmployeePreviousDetails */

$this->title = Yii::t('app', 'Create Employee Previous Details');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Employee Previous Details'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-previous-details-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
