<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\StudentMasterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Student Admisssion');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-master-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'do',
            'gender',
            'photo:ntext',
            // 'contact',
            // 'from_session',
            // 'to_session',
            // 'addmission_no',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
