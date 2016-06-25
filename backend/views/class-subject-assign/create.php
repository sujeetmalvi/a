<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ClassSubjectAssign */

$this->title = Yii::t('app', 'Create Class Subject Assign');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Class Subject Assigns'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="class-subject-assign-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
