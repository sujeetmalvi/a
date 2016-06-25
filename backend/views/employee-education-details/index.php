<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\EmployeeEducationDetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Employee Education Details');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-education-details-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Employee Education Details'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'employee_id',
            'metric_board',
            'inter_board',
            'metric_per',
            // 'inter_per',
            // 'graduation_university',
            // 'graducation_type',
            // 'graducation_per',
            // 'post_graducation_per',
            // 'post_graducation_university',
            // 'post_graduaction_type',
            // 'JBT',
            // 'NTT',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
