<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 13.11.18
 * Time: 11:02
 */

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\HttpException;
use yii\web\Response;
use yii\web\Request;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

use yii\base\Widget;
use app\components\ContactFormWidget;


class IndexController extends MainController {
    public function actionContact() {
        $formLayout = new ContactFormWidget();
        $this->layout($formLayout->run());

        $model = new ContactForm();

        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['emailto'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
        } else {
            return $this->render($formLayout->run(), [
                'model' => $model,
            ]);
        }
    }
}