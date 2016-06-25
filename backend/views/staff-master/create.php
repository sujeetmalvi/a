<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\StaffMaster */

$this->title = Yii::t('app', 'Create Staff Master');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Staff Masters'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-master-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
