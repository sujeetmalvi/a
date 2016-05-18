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

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'adm_no',
            'dob',
            'gender',
            'bloog_group',
            'stu_email:email',
            'photo',
            'fname',
            'mname',
            'f_occupation',
            'm_occupation',
            'parent_contact',
            'parent_email:email',
            'cur_h_no',
            'cur_street_address:ntext',
            'cur_area',
            'cur_po',
            'cur_district',
            'cur_state',
            'cur_pincode',
            'cur_contact',
            'per_h_no',
            'per_street_address:ntext',
            'per_area',
            'per_po',
            'per_district',
            'per_state',
            'per_pincode',
            'per_contact',
            'class',
            'section',
            'roll_no',
            'transport_status',
            'catagory',
            'physically_disabled',
            'special_discount',
            'created_at',
        ],
    ]) ?>

</div>
