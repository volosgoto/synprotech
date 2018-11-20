<?php

namespace app\modules\admin;
use yii\filters\AccessControl;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module {
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\admin\controllers';

    /**
     * {@inheritdoc}
     */
    public function init() {
        parent::init();
        $this->layout = 'admin';

        // custom initialization code goes here
    }

//    public function behaviors() {
//        return [
//            'access' => [
//                'class' => AccessControl::className(),
//                'rules' => [
//                    [
//                        'allow' => true,
//                        'roles' => ['@'],
////                    'matchCallback' => function ($rule, $action) {
////                        $user = Yii::$app->user->identity['is_admin'];
////                        if ($user === User::IS_ADMIN) return true;
////                        throw new HttpException(404, 'Страница не найдена.');
////                    }
//                    ],
//                ],
//            ],
//        ];
//
//    }
}