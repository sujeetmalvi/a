<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ClassTeacher */

$this->title = Yii::t('app', 'Create Class Teacher');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Class Teachers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="class-teacher-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
