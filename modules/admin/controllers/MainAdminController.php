<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 21.11.18
 * Time: 14:28
 */

namespace app\modules\admin\controllers;
use Yii;
use app\models\Categories;
use app\models\CategoriesSerch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\models\UploadImage;


class MainAdminController extends Controller{
    public function actionUpload(){
        $model = new UploadImage();
        if(Yii::$app->request->isPost){
            $model->image = UploadedFile::getInstance($model, 'image');
            $model->upload();
            return $this->render('upload', ['model' => $model]);
        }
        return $this->render('@app/modules/admin/views/upload/upload.php', ['model' => $model]);
    }
}