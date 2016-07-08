<?php
/**
 * Created by PhpStorm.
 * User: Ritesh Singh
 * Date: 7/7/2016
 * Time: 9:02 PM
 */?>

<div class="row" style="margin-left: auto; margin-right: auto;">

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
  </div>
