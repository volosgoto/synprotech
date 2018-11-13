<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\components\NavbarWidget;
use app\components\ContactFormWidget;
use \app\components\FooterWidget;
use app\widgets\Alert;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>

<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>
<noscript>
    You need to enable JavaScript to run this app.
</noscript>


<?= NavbarWidget::widget()?>


<!-- Flash msg-->
<div class="w3-container w3-center">
    <?= Alert::widget(); ?>
</div>



<!--Content-->
<?= $content ?>





<!--main contact form-->
<?php
    if (Yii::$app->response->statusCode == 200) echo ContactFormWidget::widget();
?>
<!--main contact form ENDS-->


<!-- footer  -->
<?= FooterWidget::widget(); ?>
<!-- footer  ENDS -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>