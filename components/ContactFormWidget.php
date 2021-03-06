<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 12.11.18
 * Time: 22:32
 */

namespace app\components;
use yii\base\Widget;
use app\models\ContactForm;

class ContactFormWidget extends Widget {
    public $model;
    public function init() {

        $this->model = new ContactForm();
    }

    public function run() {
        return $this->render('contact-form', [ 'model' => $this->model]);
    }

}