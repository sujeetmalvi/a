<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\StudentMaster */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Student Masters'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-master-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>
<div class="row">
    <div class="col-md-3 col-md-offset-4">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'id',
           // 'name',
           // 'do',
           // 'gender',
            [
                'attribute'=>'photo',
                'label'=>false,
                 'value'=>$model->photo,
                'format' => ['image',['width'=>'200','height'=>'200']],
            ],
           // 'contact',
           // 'from_session',
           // 'to_session',
           // 'addmission_no',
        ],
    ]) ?>
 </div>

</div>
<div class="row">
   <div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-body">
            <div class="row">
<div class="col-md-12">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
             'name',
             'do',
             'gender',
            //[
              //  'attribute'=>'photo',
               // 'value'=>$model->photo,
               // 'format' => ['image',['width'=>'200','height'=>'200']],
           // ],
             'contact',
            [
                'attribute'=>'class_id',
                'value'=>$model->education->class->name,
            ],
            [
                'attribute'=>'section',
                'value'=>$model->education->section->name,
            ],
            [
                'attribute'=>'roll_no',
                'value'=>$model->education->roll_id
            ],
            [
                'attribute'=>'address',
                'value'=>$model->addresses->street_address
            ],
            [
                'attribute'=>'from_session',
                'value'=>$model->session->sortname,
            ],
           //  'from_session',
            // 'to_session',
             'addmission_no',
        ],
    ]) ?>
    </div>
    </div>
     </div>
    </div>
</div>