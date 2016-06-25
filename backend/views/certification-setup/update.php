<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CertificationSetup */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Certification Setup',
]) . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Certification Setups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="certification-setup-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
