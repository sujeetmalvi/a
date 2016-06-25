<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\SchoolDetails */

$this->title = Yii::t('app', 'Create School Details');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'School Details'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-details-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
