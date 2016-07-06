<?php

namespace backend\controllers;

use backend\models\ClassMaster;
use backend\models\FeeMaster;
use backend\models\StudentCatagory;
use backend\models\StudentEducation;
use backend\models\StudentTransport;
use Yii;
use backend\models\AddmissionPaymentDetails;
use backend\models\AddmissionPaymentDetailsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\StudentMaster;

/**
 * AddmissionPaymentDetailsController implements the CRUD actions for AddmissionPaymentDetails model.
 */
class AddmissionPaymentDetailsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all AddmissionPaymentDetails models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AddmissionPaymentDetailsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AddmissionPaymentDetails model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new AddmissionPaymentDetails model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
        $model = new AddmissionPaymentDetails();
        $student_data= new StudentMaster();
        $education= new StudentEducation();
        $student=$student_data->findOne($id);
      //  print_r($student);exit;
        $class_id=$education->findOne(['student_id'=>$id]);
        $fee=FeeMaster::findOne(['class_id'=>$class_id->class_id,'type_id'=>'3']);
        $transport = StudentTransport::find()
            ->where(['student_id' => $id])
            ->one();
        if($transport->route_id!='3'){
            $t_fee=FeeMaster::findOne(['class_id'=>$class_id->class_id,'type_id'=>'2']);
            $tps=$t_fee->name;
        }else{
            $tps=0;
        }
        $discount=StudentCatagory::findOne(['id'=>$student->catagory]);
        $cal=$discount->discount_in_adm;
        if($cal==0)$cal=1;
        $amount_per=$fee->name/$cal;
        $total=$amount_per+$amount_per+$tps;
        $total=ceil($total);



        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            return $this->render('receipt', ['id' =>$id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'student'=>$student,
                'amt'=>$total,
                'education'=>$education,
                'class_id'=>$class_id->class_id,
            ]);
        }
    }

    /**
     * Updates an existing AddmissionPaymentDetails model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing AddmissionPaymentDetails model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AddmissionPaymentDetails model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AddmissionPaymentDetails the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AddmissionPaymentDetails::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
