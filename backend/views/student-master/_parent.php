<?php
/**
 * Created by PhpStorm.
 * User: Ritesh Singh
 * Date: 7/7/2016
 * Time: 9:02 PM
 */?>
<div class="row" style="margin-left: auto; margin-right: auto;">
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
