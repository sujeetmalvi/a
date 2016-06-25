<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Graducation */

$this->title = Yii::t('app', 'Create Graducation');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Graducations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="graducation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
