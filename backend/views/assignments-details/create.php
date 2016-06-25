<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\AssignmentsDetails */

$this->title = Yii::t('app', 'Create Assignments Details');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Assignments Details'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assignments-details-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
