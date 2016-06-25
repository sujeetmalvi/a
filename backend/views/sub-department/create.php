<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\SubDepartment */

$this->title = Yii::t('app', 'Create Sub Department');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sub Departments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-department-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
