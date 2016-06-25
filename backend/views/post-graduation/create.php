<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PostGraduation */

$this->title = Yii::t('app', 'Create Post Graduation');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Post Graduations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-graduation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
