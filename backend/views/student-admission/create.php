<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\StudentAdmission */

$this->title = Yii::t('app', 'Payment Details');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Student Admissions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-admission-create">

    

    <?= $this->render('_form', [
        'model' => $model,
        'id'=>$id,
    ]) ?>

</div>
