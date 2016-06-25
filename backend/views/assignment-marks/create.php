<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\AssignmentMarks */

$this->title = Yii::t('app', 'Create Assignment Marks');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Assignment Marks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assignment-marks-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
