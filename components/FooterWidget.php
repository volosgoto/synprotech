<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 12.11.18
 * Time: 22:40
 */

namespace app\components;


use yii\base\Widget;

class FooterWidget extends Widget {
    public function init() {
    }

    public function run() {
        return $this->render('footer');
    }


}