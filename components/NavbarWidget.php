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
    public $name;

    public function init() {
        parent::init();
        if ($this->name === null) $this->name = 'Guest';
    }

    public function run() {
//       return '<h1>NavbarWidget</h1>';
        return $this->render('navbar');
    }

}