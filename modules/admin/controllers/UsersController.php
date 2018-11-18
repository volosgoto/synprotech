<?php

namespace app\modules\admin\controllers;


use Yii;
use app\controllers\MainController;
use app\models\UsersSerch;

class UsersController extends MainController
{
    public function actionIndex()
    {

        $searchModel = new UsersSerch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);


    }

}
