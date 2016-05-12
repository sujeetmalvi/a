<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\State;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\DistrictSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Districts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="district-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Add New District'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
          //  'state_id',
            [
                'attribute'=>'state_id',
                'value'=>'state.name',
                'filter'=>Html::activeDropDownList($searchModel,'state_id',ArrayHelper::map(State::find()->all(),'id','name'),
                    [
                        'prompt'=>'Please Select State To Filter',
                        'class'=>'form-control'
                    ]),
            ],
            'name',
           // 'created_at',
          //  'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
