<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\StudentMaster */

$this->title = Yii::t('app', 'New Addmission');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Student Masters'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-master-create">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>