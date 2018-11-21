<?php

namespace app\modules\admin\controllers;

use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;
use app\models\UploadImage;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends MainAdminController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }


    public function actionUpload(){
        $model = new UploadImage();
        if(Yii::$app->request->isPost){
            $model->image = UploadedFile::getInstance($model, 'image');
            $model->upload();
            return $this->render('@app/modules/admin/views/upload/upload.php', ['model' => $model]);
        }
        return $this->render('@app/modules/admin/views/upload/upload.php', ['model' => $model]);
    }
}
