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
use yii\debug;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>

<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'href' => Url::to('/images/favicon_synprotech.png')]);?>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-129481057-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-129481057-1');
    </script>
</head>

<body>
<?php $this->beginBody() ?>
<noscript>
    You need to enable JavaScript to run this app.
</noscript>


<?= NavbarWidget::widget()?>

<pre>
<?= print_r($_SERVER) ?>
</pre>


<!--Content-->
<?= $content ?>


<!-- Flash msg-->
<div id="аlert-widget" class="w3-container w3-center">
    <div class="w3-row">
        <?= Alert::widget();  ?>
    </div>
</div>



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