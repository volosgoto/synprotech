<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 21.11.18
 * Time: 14:28
 */

namespace app\modules\admin\controllers;
use app\models\ImageUpload;
use Yii;
use app\models\Categories;
use app\models\CategoriesSerch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;


class MainAdminController extends Controller{

    public function actionSetImage($id){
        $model = new ImageUpload();
        $view= Yii::$app->controller->action->id;

        if(Yii::$app->request->isPost){
            $model->image = UploadedFile::getInstance($model, 'image');
            $model->upload();
            return $this->render($view, ['model' => $model]);
        }
        return $this->render($view, ['model' => $model]);
    }
}