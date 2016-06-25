<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\FeePaymentDetails */

$this->title = Yii::t('app', 'Create Fee Payment Details');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Fee Payment Details'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fee-payment-details-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
