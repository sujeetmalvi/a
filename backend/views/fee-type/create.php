<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\FeeType */

$this->title = Yii::t('app', 'Create Fee Type');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Fee Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fee-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
