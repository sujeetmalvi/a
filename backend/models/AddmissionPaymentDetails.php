<?php

namespace backend\models;

use Yii;
use yii\db\Query;
use backend\models\StudentAddress;
use backend\models\StudentMaster;
use backend\models\StudentEducation;
use backend\models\StudentTransport;

/**
 * This is the model class for table "addmission_payment_details".
 *
 * @property integer $id
 * @property integer $student_id
 * @property integer $class_id
 * @property string $amt
 * @property integer $pay_mode
 * @property string $pay_mode_detail
 * @property string $remarks
 * @property integer $session_id
 */
class AddmissionPaymentDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'addmission_payment_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'class_id', 'amt', 'pay_mode', 'pay_mode_detail', 'remarks', 'session_id'], 'required'],
            [['student_id', 'class_id', 'pay_mode', 'session_id'], 'integer'],
            [['remarks'], 'string'],
            [['amt'], 'string', 'max' => 11],
            [['pay_mode_detail'], 'string', 'max' => 250],
        ];
    }

    public function getSlip($id)
    {
        $query = (new \yii\db\Query())->select(['*,`student_master`.`addmission_no` as addmission_no,`student_education`.`class_id` as class_id,`student_master`.`name` as stu_name,`student_master`.`id` as stu_id,`addmission_payment_details`.`id` as rcpt_no'])->from('student_master')->innerJoin('student_education','student_education.student_id=student_master.id')->innerJoin('addmission_payment_details','addmission_payment_details.student_id=student_master.id')->where(['student_master.id'=>$id]);
             $command = $query->createCommand();
             $data = $command->queryAll();
        foreach($data as $row){
            $id=$row['stu_id'];
            $out[$id]['name']=$row['stu_name'];
            $out[$id]['rcpt_no']=$row['rcpt_no'];
            $out[$id]['fee_breakup']=$this->fee_breakup($row['class_id']);
            $out[$id]['class_id']=$this->class_name($row['class_id']);
            $out[$id]['date']=$row['date'];
            $out[$id]['adm_no']=$row['addmission_no'];
            $out[$id]['session']=$this->getSessionname($row['from_session']);
        }
        return $out;
    }

    public function getSessionname($id)
    {
        return  Session::find()->where(['status'=>'1','id'=>$id])->one();
    }

    public function fee_breakup($class)
    {
     return   FeeBreakup::find()->where(['class_id'=>$class,'fee_type_id'=>1])->all();
}
    public function class_name($class)
    {
        return   ClassMaster::find()->where(['id'=>$class])->one();
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'student_id' => Yii::t('app', 'Student id'),
            'class_id' => Yii::t('app', 'Class'),
            'amt' => Yii::t('app', 'Amt'),
            'pay_mode' => Yii::t('app', 'Pay Mode'),
            'pay_mode_detail' => Yii::t('app', 'Pay Mode Detail'),
            'remarks' => Yii::t('app', 'Remarks'),
            'session_id' => Yii::t('app', 'Session ID'),
        ];
    }
}
