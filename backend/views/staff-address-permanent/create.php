<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\StaffAddressPermanent */

$this->title = Yii::t('app', 'Create Staff Address Permanent');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Staff Address Permanents'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-address-permanent-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
