<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\EmployeeCurrentContact */

$this->title = Yii::t('app', 'Create Employee Current Contact');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Employee Current Contacts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-current-contact-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
