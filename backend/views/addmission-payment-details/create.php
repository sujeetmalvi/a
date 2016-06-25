<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\AddmissionPaymentDetails */

$this->title = Yii::t('app', 'Create Addmission Payment Details');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Addmission Payment Details'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="addmission-payment-details-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'student'=>$student,
        'amt'=>$amt,
        'education'=>$education,
        'class_id'=>$class_id
    ]) ?>

</div>
