<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\BoardMaster */

$this->title = Yii::t('app', 'Create Board Master');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Board Masters'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="board-master-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
