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


    </p>
    <div class="panel panel-primary">
        <div class="panel-body">
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'name',
            'do',
            'gender',
           // 'photo:ntext',
            [
                'attribute'=>'photo',
              //  'value'=>$model->photo,
                'format' => ['image',['width'=>'100','height'=>'100']],
            ],
             'contact',

            // 'from_session',
            // 'to_session',
             'addmission_no',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
 </div>
    </div>
