<?php

namespace backend\controllers;

use backend\models\StudentAddress;

use Yii;
use backend\models\StudentMaster;
use backend\models\StudentTransport;
use backend\models\StudentEducation;
use backend\models\StudentMasterSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
//use yii\db\Transaction;
use yii\base\Exception;
use yii\web\UploadedFile;
use yii\helpers\Url;

/**
 * StudentMasterController implements the CRUD actions for StudentMaster model.
 */
class StudentMasterController extends Controller
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
     * Lists all StudentMaster models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StudentMasterSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single StudentMaster model.
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
     * Creates a new StudentMaster model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new StudentMaster();
        $student_transport= new StudentTransport();
        $student_education = new StudentEducation();
        $student_address = new StudentAddress();
        $adm_no=$model->getAddmissionNo();

        if ($model->load(Yii::$app->request->post()) && $student_transport->load(Yii::$app->request->post()) && $student_education->load(Yii::$app->request->post()) && $student_address->load(Yii::$app->request->post())) {
            $connection = \Yii::$app->db;
            $transaction = $connection->beginTransaction();
            try{
                Yii::$app->params['studentuploadPath'] = Yii::$app->basePath . '/web/uploads/student_profile_image/';

                $image = UploadedFile::getInstance($model, 'photo');
              //  print_r($image);exit;
                // store the source file name
                $imagename=$image->name;

                $ext =explode(".", $imagename);

                // generate a unique file name
                $model->photo = Yii::$app->security->generateRandomString().".{$ext[1]}";

                // the path to save file, you can set an uploadPath
                // in Yii::$app->params (as used in example below)
                $path = Yii::$app->params['studentuploadPath'] . $model->photo;
                $image->saveAs($path);
                if($model->save()==false) {
                    throw new Exception('Unable to save record');
                }
                else
                $student_education->roll_id=$student_education->getRollno($student_education->class_id,$student_education->section_id);

                $student_education->addmission_no=$model->addmission_no;
                $student_education->session_id=$model->from_session;
                $student_education->student_id=$model->id;
                if($student_education->save()==false) {

                    throw new Exception('Unable to save educational record');
                }
                else
                $student_transport->session_id=$model->from_session;
                $student_transport->student_id=$model->id;
                if($student_transport->save()==false) {
                    throw new Exception('Unable to save Transport  record');
                }
                else
                    $student_address->student_id=$model->id;
                if($student_address->save()){
                    $transaction->commit();
                }else throw new Exception('Unable to save Address record');


            }
            catch(Exception $e) {
                $transaction->rollback();
                return $this->render('create', [
                    'model' => $model,
                    'transport'=>$student_transport,
                    'education'=>$student_education,
                    'address'=>$student_address,
                    'adm_no'=>$adm_no,
                    'exception'=>$e,
                ]);
            }



           return Yii::$app->response->redirect(Url::to(['addmission-payment-details/create', 'id' => $model->id]));
        } else {
            return $this->render('create', [
                'model' => $model,
                'transport'=>$student_transport,
                'education'=>$student_education,
                'address'=>$student_address,
                'adm_no'=>$adm_no,
               // 'exception'=>'',
               // 'error'=>$e;
            ]);
        }
    }

    /**
     * Updates an existing StudentMaster model.
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
     * Deletes an existing StudentMaster model.
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
     * Finds the StudentMaster model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return StudentMaster the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = StudentMaster::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
