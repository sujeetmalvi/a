<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\ClassMaster;
use backend\models\FeeType;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\FeeMasterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Fee Masters');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fee-master-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Fee Master'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',
             [
                'attribute'=>'class_id',
                'value'=>'class.name',
                'filter' => Html::activeDropDownList($searchModel, 'class_id', ArrayHelper::map(ClassMaster::find()->asArray()->all(), 'id', 'name'),['class'=>'form-control','prompt' => 'Select Class To Filter']),
            ],
            'name',
            [
                'attribute'=>'type_id',
                'value'=>'type.name',
                'filter' => Html::activeDropDownList($searchModel, 'type_id', ArrayHelper::map(FeeType::find()->asArray()->all(), 'id', 'name'),['class'=>'form-control','prompt' => 'Select Fee Type To Filter']),
            ],
          //  'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
