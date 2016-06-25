<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\FeeBreakup */

$this->title = Yii::t('app', 'Create Fee Breakup');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Fee Breakups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fee-breakup-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
