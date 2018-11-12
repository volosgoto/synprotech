<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 12.11.18
 * Time: 22:11
 */

namespace app\components;


use yii\base\Widget;

class NavbarWidget extends Widget {
    public $userName;

    public function init() {
        parent::init();
        if ($this->userName === null) $this->userName = 'Guest';
    }

    public function run() {
        return $this->render('navbar');
    }

}