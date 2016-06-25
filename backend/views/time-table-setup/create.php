<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TimeTableSetup */

$this->title = Yii::t('app', 'Create Time Table Setup');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Time Table Setups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="time-table-setup-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
