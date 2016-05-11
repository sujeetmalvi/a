<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\ClassMaster;
use yii\helpers\ArrayHelper;
use backend\models\Section;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\ClassSectionRelationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Class Section Relations');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="class-section-relation-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Class Section Relation'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
           // 'class_id',
            [
                'attribute'=>'class_id',
                'value'=>'class.name',
                'filter' => Html::activeDropDownList($searchModel, 'class_id', ArrayHelper::map(ClassMaster::find()->asArray()->all(), 'id', 'name'),['class'=>'form-control','prompt' => 'Select Class To Filter']),
            ],
            [
                'attribute'=>'section_id',
                'value'=>'section.name',
                'filter' => Html::activeDropDownList($searchModel, 'section_id', ArrayHelper::map(Section::find()->asArray()->all(), 'id', 'name'),['class'=>'form-control','prompt' => 'Select Section To Filter']),
            ],
           // 'section_id',
          //  'created_at',
          //  'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
