<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>



<section class="section-contact-form">
    <div id="contact" class="w3-gray w3-twothird w3-center">
        <div class="w3-card-4">
            <div class="w3-container w3-dark-gray">
                <h2 class="w3-margin-top"><?= Html::encode($this->title) ?></h2>
            </div>

            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'options' => ['class' => 'w3-container w3-padding-xlarge'], /* класс формы */
                'action' => Url::to(['auth/login']),
                'method' => 'post',
                'fieldConfig' => [],
            ]); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'rememberMe')->checkbox([
//                'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
            ]) ?>

            <div class="form-group">
                <?= Html::submitButton('Login', ['class' => 'w3-button w3-black w3-large w3-hover-blue-gray', 'name' => 'contact-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>

        </div>
    </div>
</section>