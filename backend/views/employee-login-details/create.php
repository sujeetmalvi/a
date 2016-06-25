<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\EmployeeLoginDetails */

$this->title = Yii::t('app', 'Create Employee Login Details');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Employee Login Details'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-login-details-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
