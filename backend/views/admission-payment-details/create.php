<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\AdmissionPaymentDetails */

$this->title = Yii::t('app', 'Create Admission Payment Details');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Admission Payment Details'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admission-payment-details-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'id'=>$id,
        'adm_no'=>$adm_no
    ]) ?>

</div>
