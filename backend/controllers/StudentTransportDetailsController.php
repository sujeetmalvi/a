<?php

namespace backend\controllers;

use Yii;
use backend\models\StudentTransportDetails;
use backend\models\StudentTransportDetailsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\StudentMaster;
use yii\helpers\Url;
use backend\models\StudentAdmission;
/**
 * StudentTransportDetailsController implements the CRUD actions for StudentTransportDetails model.
 */
class StudentTransportDetailsController extends Controller
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
     * Lists all StudentTransportDetails models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StudentTransportDetailsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single StudentTransportDetails model.
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
     * Creates a new StudentTransportDetails model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
        $model = new StudentTransportDetails();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $adm=StudentMaster::find()->where(['id'=>$id])->one();
            $adm_id=$adm->adm_no;

            $student_pay=StudentAdmission::find()->where(['student_id'=>$id])->one();
            $student_paymode=$student_pay->pay_mode;
            if($student_paymode!=2){
            return Yii::$app->response->redirect(Url::to(['admission-payment-details/create', 'id' => $id,'adm'=>$adm_id]));
            }
            else{
                 return Yii::$app->response->redirect(Url::to(['student-master/success', 'id' => $id,'adm'=>$adm_id]));
            } 

        } else {
            return $this->render('create', [
                'model' => $model,
                'id'=>$id
            ]);
        }
    }

    /**
     * Updates an existing StudentTransportDetails model.
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
     * Deletes an existing StudentTransportDetails model.
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
     * Finds the StudentTransportDetails model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return StudentTransportDetails the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = StudentTransportDetails::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
