<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 12.11.18
 * Time: 9:12
 */

namespace app\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\HttpException;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;



class PartnersController extends MainController {
    public function actionIndex(){
        return $this->render('index');
    }

    public function actionView(){
        return $this->render('view');
    }
}