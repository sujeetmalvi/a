<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\FeeMaster */

$this->title = Yii::t('app', 'Create Fee Master');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Fee Masters'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fee-master-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
