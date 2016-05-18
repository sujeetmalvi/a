<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\StudentTransportDetails */

$this->title = Yii::t('app', 'Transport Details');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Student Transport Details'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-transport-details-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'id'=>$id
    ]) ?>

</div>
