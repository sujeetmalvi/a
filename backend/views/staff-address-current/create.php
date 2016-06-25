<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\StaffAddressCurrent */

$this->title = Yii::t('app', 'Create Staff Address Current');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Staff Address Currents'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-address-current-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
