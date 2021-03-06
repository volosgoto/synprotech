<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\HttpException;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\components\ContactFormWidget;


class SiteController extends MainController {
    /**
     * {@inheritdoc}
     */



    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex() {



        $title = 'Home Page';
        return $this->render('index', compact('title'));
    }


    public function actionDownload(){
        $url= $_GET["url"];
        $path = Yii::getAlias('@webroot') . "/$url" . '/download/Booklet_Synprotech_ LLC_nov_2018.pdf';

        $file = $path;
        if (file_exists($file)) {
            Yii::$app->response->xSendFile($file);
        }
    }





    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact() {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['emailto'])) {

            // TODO Change on hosting pay-plan. Uncommetn next string to send emails
//            $headers = 'Contact form: synproenginfo@gmail.com' . 'Reply-To: office@synproeng.com';
//            mail(Yii::$app->params['emailto'], $model->subject, $model->body);

            Yii::$app->session->setFlash('success', 'Message has been send');

            // Go Back
            if(Yii::$app->user->returnUrl != '/') {
                return $this->goBack();
            } else {
                return Yii::$app->request->referrer ? $this->redirect(Yii::$app->request->referrer) : $this->goHome();
            }


        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }


    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout() {
        return $this->render('about');
    }

}


