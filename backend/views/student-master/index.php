<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\StudentMasterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Student Masters');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-master-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'New Admission'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            'adm_no',
           // 'dob',
            'gender',
            // 'bloog_group',
            // 'stu_email:email',
            // 'photo',
             'fname',
            // 'mname',
            // 'f_occupation',
            // 'm_occupation',
            // 'parent_contact',
            // 'parent_email:email',
            // 'cur_h_no',
            // 'cur_street_address:ntext',
            // 'cur_area',
            // 'cur_po',
            // 'cur_district',
            // 'cur_state',
            // 'cur_pincode',
            // 'cur_contact',
            // 'per_h_no',
            // 'per_street_address:ntext',
            // 'per_area',
            // 'per_po',
            // 'per_district',
            // 'per_state',
            // 'per_pincode',
            // 'per_contact',
             'class',
             'section',
             'roll_no',
            // 'transport_status',
            // 'catagory',
            // 'physically_disabled',
            // 'special_discount',
            // 'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
