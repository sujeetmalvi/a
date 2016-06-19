<?php

namespace backend\models;

use Yii;
use backend\models\StudentMaster;
use backend\models\FeeMaster;
/**
 * This is the model class for table "student_admission".
 *
 * @property integer $id
 * @property integer $student_id
 * @property integer $fee_amt
 * @property integer $paid_fee
 * @property integer $discount_amt
 * @property integer $pay_mode
 * @property string $created_at
 * @property integer $discount
 */
class StudentAdmission extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student_admission';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'fee_amt', 'paid_fee', 'discount_amt', 'pay_mode', 'discount'], 'required'],
            [['student_id', 'fee_amt', 'paid_fee', 'discount_amt', 'pay_mode', 'discount'], 'integer'],
            [['created_at'], 'safe'],
        ];
    }

    public function beforeSave($insert){
        if(parent::beforeSave($insert)){
             if($this->isNewRecord){
              
              
                $this->created_at=date("Y-m-d H:i:s");
              
                return TRUE;
            }else{
               
               
                return TRUE;
            }
        }else{
            return FALSE;
        }
    }

    public function getStudent($id){

        $countBranches=StudentMaster::find()->count();
        $branches = FeeMaster::find()
                ->select('_fee_master.name as name')
                ->leftJoin('student_master', '`student_master`.`class` = `_fee_master`.`class_id`')
                ->where(['student_master.id' => $id,'_fee_master.type_id'=>'3'])
                ->all();
 
        if($countBranches > 0 )
        {
            foreach($branches as $branch ){
                    return $branch->name;
            }
        }
        else{
            return 0;
        }
    }
    public function getTransport($id){
        $countBranches=StudentMaster::find()->where(['id'=>$id,'transport_status'=>'school'])->count();
        
        if($countBranches > 0 )
        {
        $branches = FeeMaster::find()
                ->select('_fee_master.name as name')
                ->leftJoin('student_master', '`student_master`.`class` = `_fee_master`.`class_id`')
                ->where(['student_master.id' => $id,'_fee_master.type_id'=>'2'])
                ->all();
 
        
            foreach($branches as $branch ){
                    return $branch->name;
            }
        }
        else{
            return 0;
        }
 
    }


    public function getDiscount($id){

        $countBranches=StudentMaster::find()->count();
        // $branches = StudentMaster::find()
        //         ->select('_student_catagory.discount_in_adm')
        //         ->leftJoin('_student_catagory', '`student_master`.`catagory` = `_student_catagory`.`id`')
        //         ->where(['student_master.id' => $id])
        //         ->all();
         $branches = StudentCatagory::find()
                ->select('_student_catagory.discount_in_adm')
                ->leftJoin('student_master', '`student_master`.`catagory` = `_student_catagory`.`id`')
                ->where(['student_master.id' => $id])
                ->all();
 
        if($countBranches > 0 )
        {
            foreach($branches as $branch ){
                    $dsc=$branch->discount_in_adm;
                    if($dsc!=0){
                        return $dsc;

                    }else{
                        return 0;
                    }
            }
        }
        else{
            return 0;
        }
 

    }








    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'student_id' => Yii::t('app', 'Student ID'),
            'fee_amt' => Yii::t('app', 'Fee Amt'),
            'paid_fee' => Yii::t('app', 'Paid Fee'),
            'discount_amt' => Yii::t('app', 'Discount Amt'),
            'pay_mode' => Yii::t('app', 'Pay Mode'),
            'created_at' => Yii::t('app', 'Created On'),
            'discount' => Yii::t('app', 'Discount'),
        ];
    }
}
