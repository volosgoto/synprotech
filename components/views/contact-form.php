<?php

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact Us';

AppAsset::register($this);
?>

<section class="section-contact-form">
     <div class="w3-container w3-dark-gray w3-twothird w3-center">
    <div class="w3-dark-gray w3-twothird w3-center">

    // Заголовок
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

    <div class="alert alert-success">
        Message has been send.
    </div>

    <?php else: ?>



    <?php $form = ActiveForm::begin([
        'id' => 'contact-form', /* Идентификатор формы */
        'options' => ['class' => 'form-horizontal'], /* класс формы */
        'action' => Url::home(),
        'method' => 'post',
        'fieldConfig' => [ /* классы полей формы */
            'template' => "<div class=\"col-lg-3\">{label}</div>\n<div class=\"col-lg-9\">{input}</div>\n<div class=\"col-lg-12 col-lg-offset-3 \">{error}</div>"

        ],
    ]); ?>
        /* Поля формы и капча */
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'subject') ?>

        <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>
        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
            'captchaAction' => '/index/captcha',
            'template' => '<div class="row"><div class="col-lg-4">{image}</div><div class="col-lg-7">{input}</div></div>',
        ]) ?>

        <div class="form-group">
            <?= Html::submitButton('Отправить сообщение', ['class' => 'btn btn-default waves-effect btn-color-orange btn-color-orange-long', 'name' => 'contact-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    <?php endif; ?>
    </div>

</div>
</section>


    <!-- main contact form -->
<!--<section class="section-contact-form">-->
<!--    <!-- <div class="w3-container w3-dark-gray w3-twothird w3-center"> -->-->
<!--    <div class="w3-dark-gray w3-twothird w3-center">-->
<!--        <div class="w3-card-4">-->
<!--            <div class="w3-container w3-dark-gray ">-->
<!--                <h2 class="w3-margin-top">Contact Us</h2>-->
<!--            </div>-->
<!--            <form id="email-form" action="" class="w3-container w3-padding-xlarge" method="">-->
<!--                <label class="w3-input ">Name</label>-->
<!--                <input id="name" name="name" class="w3-input" type="text">-->
<!--                <div class="invalid-feedback">-->
<!--                    Enter name-->
<!--                </div>-->
<!--                <label class="w3-input">Email</label>-->
<!--                <input id="email" name="email" class="w3-input" type="text">-->
<!--                <div class="invalid-feedback">-->
<!--                    Enter a valid Email-->
<!--                </div>-->
<!--                <label class="w3-input">Phone</label>-->
<!--                <input id="phone" name="phone" class="w3-input" type="text">-->
<!--                <div class="invalid-feedback">-->
<!--                    Enter a valid phone-->
<!--                </div>-->
<!--                <label class="w3-input">Message </label>-->
<!--                <textarea id="message" name="message" class="w3-input" style="resize:none"></textarea>-->
<!--                <div class="invalid-feedback">-->
<!--                    Enter text message-->
<!--                </div>-->
<!--                <br>-->
<!--                <button onclick="sendMail()" id="submit" type="submit" class="w3-button w3-black w3-large w3-hover-blue-gray">Submit</button>-->
<!--                <br><br>-->
<!--            </form>-->
<!--        </div>-->
<!--</section>-->
<!-- main contact form ENDS-->


