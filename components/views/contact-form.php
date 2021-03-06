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
    <div id="contact" class="w3-gray w3-twothird w3-center">
        <div class="w3-card-4">
            <div class="w3-container w3-dark-gray">
                <h2 class="w3-margin-top"><?= Html::encode($this->title) ?></h2>
            </div>

        <?php $form = ActiveForm::begin([
            'id' => 'email-form',
            'options' => ['class' => 'w3-container w3-padding-xlarge'], /* класс формы */
            'action' => Url::to(['site/contact']),
            'method' => 'post',
            'fieldConfig' => [],
        ]); ?>
        <?= $form->field($model, 'name')->textInput() ?>
        <?= $form->field($model, 'email')->textInput() ?>
        <?= $form->field($model, 'subject')->textInput() ?>
        <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>


        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'w3-button w3-black w3-large w3-hover-blue-gray', 'name' => 'contact-button']) ?>
        </div>
        <?php ActiveForm::end(); ?>
        </div>
    </div>
</section>



