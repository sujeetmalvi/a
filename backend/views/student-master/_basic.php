<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datecontrol\DateControl;
use kartik\widgets\FileInput;
/**
 * Created by PhpStorm.
 * User: Ritesh Singh
 * Date: 7/7/2016
 * Time: 7:21 PM
 */?>
<?php // if(isset($exception))echo $exception->getMessage();     ?>


        <div class="row" style="margin-left: auto; margin-right: auto;">

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

                <?= $form->field($model, 'catagory',[
                    'template' => '<span class="star">*</span>{label} <div class="row"><div class="col-sm-12">{input}{error}{hint}</div></div>'
                ])->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\StudentCatagory::find()->all(),'id','name'),['prompt'=>'Please Select Catagory']) ?>

                <?= $form->field($model, 'from_session',[
                    'template' => '<span class="star">*</span>{label} <div class="row"><div class="col-sm-12">{input}{error}{hint}</div></div>'
                ])->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\Session::find()->all(),'id','sortname')) ?>

            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'photo')->widget(FileInput::classname(), [
                    'options' => ['accept' => 'image/*'],
                ]); ?>
            </div>
            </div>

