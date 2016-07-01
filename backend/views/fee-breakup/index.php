<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\FeeBreakupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Fee Breakups');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fee-breakup-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Fee Breakup'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            [
              'attribute'=> 'fee_type_id',
              'value'=>'feetype.name',
              'filter' => Html::activeDropDownList($searchModel, 'fee_type_id', ArrayHelper::map(\backend\models\FeeType::find()->all(), 'id', 'name'),['class'=>'form-control','prompt' => 'Select Fee Type to filter'])
            ],
            [
                'attribute'=> 'class_id',
                'value'=>'classname.name',
                'filter' => Html::activeDropDownList($searchModel, 'class_id', ArrayHelper::map(\backend\models\ClassMaster::find()->all(), 'id', 'name'),['class'=>'form-control','prompt' => 'Select Class to filter'])
            ],
            'name',
            'amt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
