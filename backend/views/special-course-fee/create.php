<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\SpecialCourseFee */

$this->title = Yii::t('app', 'Create Special Course Fee');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Special Course Fees'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="special-course-fee-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
