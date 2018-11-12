<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\helpers\Url;



$this->title = $name;
?>

<div class="w3-container w3-white w3-center" style="margin-bottom: 40px">
    <div class="site-error">
        <p style="color: red; font-size: 60px;"><?= Html::encode($this->title) ?></p>
        <div class="alert alert-danger" role="alert">
            <p style="color: red; font-size: 32px;"><?= nl2br(Html::encode($message)) ?></p>
        </div>
        <a href="<?= Url::home()?>" class="w3-button w3-green"><b>Home</b></a>
        <br>
    </div>

</div>
