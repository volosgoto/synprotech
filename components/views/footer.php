<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\components\NavbarWidget;

AppAsset::register($this);
?>


<!-- footer -->
<footer>
    <!-- scroll btn -->
    <button class="w3-button w3-blue w3-large w3-hover-blue-gray fa" onclick="topFunction()" id="scrollBtn" title="Go Top">&#xf106;</button>
    <!-- scroll btn END -->
    <div class="outer-box-footer w3-black w3-center">
        <div class="inner-box-footer">
            <?= Html::img('@web/images/synprotech32x32.png', ['class'=>'synprotech-logo w3-image w3-hover-opacity', 'alt' => 'synprotech_logo'])?>
            <p class="w3-margin-top"><b>SYNPROTECH</b> ENGINEERING LLC</p>
            <p><span><i style="font-size:12px" class="fa">&#xf095;</i> +38 044 3717890</span></p>
            <p onclick="sendMail()" class="email"><i style="font-size:12px" class="fa">&#xf003;</i> office@synproeng.com
            </p>
        </div>
        <div class="inner-box-footer">
            <?= Html::img('@web/images/qr-150-m.png', ['class'=>'w3-image', 'alt' => 'qr_code'])?>
            <p class="w3-margin w3-pading">Synprotech &copy; 2018</p>
        </div>
            <div class="">
            <?php if (Yii::$app->user->isGuest): ?>
                <ul class="w3-ul w3-small w3-center">
                    <li><a href="<?= Url::toRoute(['auth/login']) ?>">Log in</a></li>
                    <li><a href="<?= Url::toRoute(['auth/signup']) ?>">Sign up</a></li>
                </ul>
            <?php else: ?>
                <?= Html::beginForm(['/auth/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->name . ')',
                    ['class' => 'btn btn-link logout', 'style' => "padding-top:10px;"]
                )
                . Html::endForm() ?>
            <?php endif; ?>
            </div>
        <div class="inner-box-footer">
            <div class="outer-box-footer">
                <div class="inner-box-footer-social">
                    <div id="socialicons-twitter">
                        <a class="icon" href="LINK" title="Follow with Twitter" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
                        <p>Twitter</p>
                    </div>
                </div>
                <div class="inner-box-footer-social">
                    <div id="socialicons-facebook">
                        <a class="icon" href="LINK" title="Follow with Facebook" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
                        <p>Facebook</p>
                    </div>
                </div>
                <div class="inner-box-footer-social">
                    <div id="socialicons-instagram">
                        <a class="icon" href="LINK" title="Follow with Instagram" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
                        <p>Instagram</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer
    <!-- footer ENDS-->