<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AssignmentMarks */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Assignment Marks',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Assignment Marks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="assignment-marks-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
