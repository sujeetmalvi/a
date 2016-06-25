<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\FeeRecordSubmission */

$this->title = Yii::t('app', 'Create Fee Record Submission');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Fee Record Submissions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fee-record-submission-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
