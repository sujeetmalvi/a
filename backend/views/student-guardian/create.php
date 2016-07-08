<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\StudentGuardian */

$this->title = Yii::t('app', 'Create Student Guardian');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Student Guardians'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-guardian-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
