<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TransportRoute */

$this->title = Yii::t('app', 'Create Transport Route');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Transport Routes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transport-route-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
