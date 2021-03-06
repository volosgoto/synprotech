<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\User;
use app\models\UserSerch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\models\ImageUpload;

/**
 * UsersController implements the CRUD actions for User model.
 */
class UsersController extends MainAdminController
{
    /**
     * {@inheritdoc}
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
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserSerch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new User();

        if ($model->load(Yii::$app->request->post())) {

            $model->password = Yii::$app->security->generatePasswordHash(
                $model->password, 5);
                $model->save();


            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

//    public function actionSetImage($id){
//       return parent::actionSetImage($id);
//    }

//    public function actionSetImage($id){
//        $model = new ImageUpload();
//        $user = $this->findModel($id);
//        $view= Yii::$app->controller->action->id;
//
//        if(Yii::$app->request->isPost){
//            $model->image = UploadedFile::getInstance($model, 'image');
//            $fileName = $model->image;
//            $model->upload($fileName);
//            $user->saveImage($fileName);
//
//            return $this->render($view, ['model' => $model]);
//        }
//        return $this->render($view, ['model' => $model]);
//    }

    public function actionSetImage($id){
        $model = new ImageUpload();
        $user = $this->findModel($id);
        $view= Yii::$app->controller->action->id;

        if(Yii::$app->request->isPost){
            $model->image = UploadedFile::getInstance($model, 'image');
            $fileName = $model->image;
            $model->upload($fileName);
            $user->saveImage($fileName);

            return $this->render($view, ['model' => $model]);
        }
        return $this->render($view, ['model' => $model]);
    }

}
