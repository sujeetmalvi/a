<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PaymentMode */

$this->title = Yii::t('app', 'Create Payment Mode');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Payment Modes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="payment-mode-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
