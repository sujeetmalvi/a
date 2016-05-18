<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fee_payment_details".
 *
 * @property integer $id
 * @property integer $stu_id
 * @property string $adm_id
 * @property string $cheq_no
 * @property string $cheq_dt
 * @property string $bank_name
 * @property string $created_at
 */
class FeePaymentDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fee_payment_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['stu_id', 'adm_id', 'cheq_no', 'cheq_dt', 'bank_name'], 'required'],
            [['stu_id'], 'integer'],
            [['cheq_dt', 'created_at'], 'safe'],
            [['adm_id'], 'string', 'max' => 30],
            [['cheq_no', 'bank_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'stu_id' => Yii::t('app', 'Stu ID'),
            'adm_id' => Yii::t('app', 'Adm ID'),
            'cheq_no' => Yii::t('app', 'Cheq No'),
            'cheq_dt' => Yii::t('app', 'Cheq Dt'),
            'bank_name' => Yii::t('app', 'Bank Name'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }
}
