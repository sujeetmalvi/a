<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datecontrol\DateControl;
use kartik\widgets\FileInput;

/* @var $this yii\web\View */
/* @var $model backend\models\StudentMaster */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
use kartik\tabs\TabsX;
// Above




?>
<div class="student-master-form">
    <?php // if(isset($exception))echo $exception->getMessage();     ?>
    <?php $form = ActiveForm::begin([ 'options'=>['enctype'=>'multipart/form-data']]); ?>
    <div class="panel panel-primary">
    <div class="panel-body">
    <div class="row">

    <div class="col-md-3">
   <?= $form->field($model, 'addmission_no', [
        'template' => '<span class="star">*</span>{label} <div class="row"><div class="col-sm-12">{input}{error}{hint}</div></div>'
    ])->textInput(['value' =>$adm_no,'readonly'=>'readonly']) ?>

    <?= $form->field($model, 'admission_date',[
        'template' => '<span class="star">*</span>{label} <div class="row"><div class="col-sm-12">{input}{error}{hint}</div></div>'
    ])->textInput(['value' =>date('Y-m-d'),'readonly'=>'readonly']) ?>

    <?= $form->field($model, 'name',[
        'template' => '<span class="star">*</span>{label} <div class="row"><div class="col-sm-12">{input}{error}{hint}</div></div>'
    ])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'do',[
        'template' => '<span class="star">*</span>{label} <div class="row"><div class="col-sm-12">{input}{error}{hint}</div></div>'
    ])->widget(DateControl::classname(), [
        'type'=>DateControl::FORMAT_DATE,
        'ajaxConversion'=>true,
        'options' => [
            'pluginOptions' => [
                'autoclose' => true
            ]
        ]
    ]); ?>

        </div>
      <div class="col-md-3">
    <?= $form->field($model, 'gender',[
        'template' => '<span class="star">*</span>{label} <div class="row"><div class="col-sm-12">{input}{error}{hint}</div></div>'
    ])->dropDownList([ 'male' => 'Male', 'female' => 'Female', ], ['prompt' => '']) ?>




    <?= $form->field($model, 'contact',[
        'template' => '<span class="star">*</span>{label} <div class="row"><div class="col-sm-12">{input}{error}{hint}</div></div>'
    ])->textInput(['maxlength' => '10']) ?>


    </div>
    <div class="col-md-3">
        <?= $form->field($education, 'class_id',[
            'template' => '<span class="star">*</span>{label} <div class="row"><div class="col-sm-12">{input}{error}{hint}</div></div>'
        ])->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\ClassMaster::find()->all(),'id','name'),['prompt'=>'Select Class',
            'onchange'=>'$.post( "index.php?r=section/lists&id='.'"+$(this).val(), function( data ){
                                         $( "select#studenteducation-section_id" ).html( data );
                                           });',]) ?>

        <?= $form->field($education, 'section_id',[
            'template' => '<span class="star">*</span>{label} <div class="row"><div class="col-sm-12">{input}{error}{hint}</div></div>'
        ])->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\Section::find()->all(),'id','name'),
            ['prompt'=>'Select Section']) ?>
        <?= $form->field($model, 'from_session',[
            'template' => '<span class="star">*</span>{label} <div class="row"><div class="col-sm-12">{input}{error}{hint}</div></div>'
        ])->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\Session::find()->all(),'id','sortname')) ?>
    </div>
    <div class="col-md-3">
        <?= $form->field($transport, 'route_id',[
            'template' => '<span class="star">*</span>{label} <div class="row"><div class="col-sm-12">{input}{error}{hint}</div></div>'
        ])->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\Route::find()->all(),
            'id','end_point'),['prompt'=>'Select Route',
            'onchange'=>'$.post( "index.php?r=route-immediate-stations/lists&id='.'"+$(this).val(), function( data ){
                                         $( "select#studenttransport-station_id" ).html( data );
                                           });'
        ]) ?>

        <?= $form->field($transport, 'station_id',[
            'template' => '<span class="star">*</span>{label} <div class="row"><div class="col-sm-12">{input}{error}{hint}</div></div>'
        ])->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\RouteImmediateStations::find()->all(),'id','name'),['prompt'=>'Select Intermediate Station']) ?>
        <?= $form->field($model, 'catagory',[
            'template' => '<span class="star">*</span>{label} <div class="row"><div class="col-sm-12">{input}{error}{hint}</div></div>'
        ])->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\StudentCatagory::find()->all(),'id','name'),['prompt'=>'Please Select Catagory']) ?>
    </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($address, 'h_no',[
                'template' => '<span class="star">*</span>{label} <div class="row"><div class="col-sm-12">{input}{error}{hint}</div></div>'
            ])->textInput(['maxlength' => true]) ?>



            <?= $form->field($address, 'post_office',[
                'template' => '<span class="star">*</span>{label} <div class="row"><div class="col-sm-12">{input}{error}{hint}</div></div>'
            ])->textInput(['maxlength' => true]) ?>

            <?= $form->field($address, 'street_address',[
                'template' => '<span class="star">*</span>{label} <div class="row"><div class="col-sm-12">{input}{error}{hint}</div></div>'
            ])->textarea(['rows' => 6]) ?>



        </div>

        <div class="col-md-4">
            <?= $form->field($address, 'country',[
                'template' => '<span class="star">*</span>{label} <div class="row"><div class="col-sm-12">{input}{error}{hint}</div></div>'
            ])->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\Country::find()->all(),'id','name'),['prompt'=>'Please Select Country',
                'onchange'=>'$.post( "index.php?r=state/lists&id='.'"+$(this).val(), function( data ){
                                         $( "select#studentaddress-state" ).html( data );
                                           });'
            ]) ?>
            <?= $form->field($address, 'state',[
                'template' => '<span class="star">*</span>{label} <div class="row"><div class="col-sm-12">{input}{error}{hint}</div></div>'
            ])->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\State::find()->all(),'id','name'),[
                'prompt'=>'Please Select State',
                'onchange'=>'$.post( "index.php?r=district/lists&id='.'"+$(this).val(), function( data ){
                                         $( "select#studentaddress-district" ).html( data );
                                           });'
            ]) ?>

            <?= $form->field($address, 'district',[
                'template' => '<span class="star">*</span>{label} <div class="row"><div class="col-sm-12">{input}{error}{hint}</div></div>'
            ])->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\District::find()->all(),'id','name'),['prompt'=>'Select District'])  ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'photo')->widget(FileInput::classname(), [
                'options' => ['accept' => 'image/*'],
            ]); ?>
        </div>
        <div class="row">
            <div class="col-md-4">
            <?= $form->field($guardian, 'fathername',[
                'template' => '<span class="star">*</span>{label} <div class="row"><div class="col-sm-12">{input}{error}{hint}</div></div>'
            ])->textInput(['maxlength' => true]) ?>

            <?= $form->field($guardian, 'mothername',[
                'template' => '<span class="star">*</span>{label} <div class="row"><div class="col-sm-12">{input}{error}{hint}</div></div>'
            ])->textInput(['maxlength' => true]) ?>

            <?= $form->field($guardian, 'fatheroccupation',[
                'template' => '<span class="star">*</span>{label} <div class="row"><div class="col-sm-12">{input}{error}{hint}</div></div>'
            ])->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-4">
            <?= $form->field($guardian, 'motheroccupation',[
                'template' => '<span class="star">*</span>{label} <div class="row"><div class="col-sm-12">{input}{error}{hint}</div></div>'
            ])->textInput(['maxlength' => true]) ?>

            <?= $form->field($guardian, 'fathereducation',[
                'template' => '<span class="star">*</span>{label} <div class="row"><div class="col-sm-12">{input}{error}{hint}</div></div>'
            ])->textInput(['maxlength' => true]) ?>

            <?= $form->field($guardian, 'monthereducation',[
                'template' => '<span class="star">*</span>{label} <div class="row"><div class="col-sm-12">{input}{error}{hint}</div></div>'
            ])->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="col-md-4">
            <?= $form->field($guardian, 'fathercontact',[
                'template' => '<span class="star">*</span>{label} <div class="row"><div class="col-sm-12">{input}{error}{hint}</div></div>'
            ])->textInput(['maxlength' => true]) ?>

            <?= $form->field($guardian, 'mothercontact',[
                'template' => '<span class="star">*</span>{label} <div class="row"><div class="col-sm-12">{input}{error}{hint}</div></div>'
            ])->textInput(['maxlength' => true]) ?>

            <?= $form->field($guardian, 'email',[
                'template' => '<span class="star">*</span>{label} <div class="row"><div class="col-sm-12">{input}{error}{hint}</div></div>'
            ])->textInput(['maxlength' => true]) ?>
                        </div>
            </div>

    </div>
    <div class="row">
        <div class="col-lg-offset-6">
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
        </div>
</div>
</div>









<!--    education details -->



<!--    transport details-->



<!--   address details-->








    <?php ActiveForm::end(); ?>

</div>
<?php

$items = [
    [
        'label'=>'<i class="glyphicon glyphicon-home"></i> Home',
        'content'=>'1256',
        'active'=>true
    ],
    [
        'label'=>'<i class="glyphicon glyphicon-user"></i> Profile',
        'content'=>'456',

    ],

];
echo TabsX::widget([
    'items'=>$items,
    'position'=>TabsX::POS_ABOVE,
    'encodeLabels'=>false
]);




?>