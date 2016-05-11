<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\StudentCatagory */

$this->title = Yii::t('app', 'Create Student Catagory');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Student Catagories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-catagory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
