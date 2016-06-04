<?php

namespace backend\controllers;

use Yii;
use backend\models\StudentAdmission;
use backend\models\StudentAdmissionSearch;
use backend\models\StudentMaster;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Url;

/**
 * StudentAdmissionController implements the CRUD actions for StudentAdmission model.
 */
class StudentAdmissionController extends Controller
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
     * Lists all StudentAdmission models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StudentAdmissionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single StudentAdmission model.
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
     * Creates a new StudentAdmission model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
        $model = new StudentAdmission();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
        
            $countBranches=StudentMaster::find()->where(['id'=>$id,'transport_status'=>'school'])->count();
            $student_adm=StudentMaster::find()->where(['id'=>$id])->one();
            $adm=$student_adm->adm_no;
            $pay=StudentAdmission::find()->where(['student_id'=>$id])->one();
            $pay_mode=$pay->pay_mode;

        if($countBranches > 0){
            return Yii::$app->response->redirect(Url::to(['student-transport-details/create', 'id' => $id]));
        }else{
            if($pay_mode==2){
                 return Yii::$app->response->redirect(Url::to(['student-master/success', 'id' => $id,'adm'=>$adm]));
            }
            
        else{
            return Yii::$app->response->redirect(Url::to(['admission-payment-details/create', 'id' => $id,'adm'=>$adm]));
        }

        }


        } else {
            return $this->render('create', [
                'model' => $model,
                'id'=>$id
            ]);
        }
    }

    /**
     * Updates an existing StudentAdmission model.
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
     * Deletes an existing StudentAdmission model.
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
     * Finds the StudentAdmission model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return StudentAdmission the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = StudentAdmission::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
