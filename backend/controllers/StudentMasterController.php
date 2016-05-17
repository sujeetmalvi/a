<?php

namespace backend\controllers;

use Yii;
use backend\models\StudentMaster;
use backend\models\StudentMasterSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Url;
use backend\models\StudentInitial;
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
        $initial= new StudentInitial();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {

                 $initial->id    =$model->id;
                 $initial->name  =$model->name; 
                 $initial->adm_no    =$model->adm_no;
                 $initial->dob   =$model->dob;
                 $initial->gender    =$model->gender;
                 $initial->bloog_group   =$model->bloog_group;
                 $initial->stu_email     =$model->stu_email;
                 $initial->photo     =$model->photo;
                 $initial->fname     =$model->fname;
                 $initial->mname     =$model->mname;
                 $initial->f_occupation  =$model->f_occupation;
                 $initial->m_occupation  =$model->m_occupation;
                 $initial->parent_contact    =$model->parent_contact;
                 $initial->parent_email  =$model->parent_email;
                 $initial->cur_h_no  =$model->cur_h_no;
                 $initial->cur_street_address    =$model->cur_street_address;
                 $initial->cur_area  =$model->cur_area;
                 $initial->cur_po    =$model->cur_po;
                 $initial->cur_district  =$model->cur_district;
                 $initial->cur_state     =$model->cur_state;
                 $initial->cur_pincode   =$model->cur_pincode;
                 $initial->cur_contact   =$model->cur_contact;
                 $initial->per_h_no  =$model->per_h_no;
                 $initial->per_street_address    =$model->per_street_address;
                 $initial->per_area  =$model->per_area;
                 $initial->per_po    =$model->per_po;
                 $initial->per_district  =$model->per_district;
                 $initial->per_state     =$model->per_state;
                 $initial->per_pincode   =$model->per_pincode;
                 $initial->per_contact   =$model->per_contact;
                 $initial->class     =$model->class;
                 $initial->section   =$model->section;
                 $initial->roll_no   =$model->roll_no;
                 $initial->transport_status  =$model->transport_status;
                 $initial->catagory  =$model->catagory;
                 $initial->physically_disabled   =$model->physically_disabled;
                 $initial->special_discount  =$model->special_discount;
                 $initial->created_at    =$model->created_at;
                 $initial->save();



            return Yii::$app->response->redirect(Url::to(['student-admission/create', 'id' => $model->id]));
          //  return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
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
