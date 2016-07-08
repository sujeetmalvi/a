<?php
/**
 * Created by PhpStorm.
 * User: Ritesh Singh
 * Date: 7/7/2016
 * Time: 9:02 PM
 */?>
<div class="row" style="margin-left: auto; margin-right: auto;">
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
</div>
</div>