<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\EmployeePermanentContact */

$this->title = Yii::t('app', 'Create Employee Permanent Contact');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Employee Permanent Contacts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-permanent-contact-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
