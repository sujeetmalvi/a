<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ClassSectionRelation */

$this->title = Yii::t('app', 'Create Class Section Relation');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Class Section Relations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="class-section-relation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
