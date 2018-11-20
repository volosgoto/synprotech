<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
        body {background-color: magenta}
    </style>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="w3-light-grey">
<?php $this->beginBody() ?>

<!--<div class="wrap">-->
<!--    --><?php
//    NavBar::begin([
//        'brandLabel' => Yii::$app->name,
//        'brandUrl' => Yii::$app->homeUrl,
//        'options' => [
//            'class' => 'navbar-inverse navbar-fixed-top',
//        ],
//    ]);
//    echo Nav::widget([
//        'options' => ['class' => 'navbar-nav navbar-right'],
//        'items' => [
//            ['label' => 'Home', 'url' => ['/site/index']],
//            ['label' => 'About', 'url' => ['/site/about']],
//            ['label' => 'Contact', 'url' => ['/site/contact']],
//            Yii::$app->user->isGuest ? (
//            ['label' => 'Login', 'url' => ['/site/login']]
//            ) : (
//                '<li>'
//                . Html::beginForm(['/site/logout'], 'post')
//                . Html::submitButton(
//                    'Logout (' . Yii::$app->user->identity->username . ')',
//                    ['class' => 'btn btn-link logout']
//                )
//                . Html::endForm()
//                . '</li>'
//            )
//        ],
//    ]);
//    NavBar::end();
//    ?>



<!-- Top container -->
<div class="w3-bar w3-black w3-large" style="z-index:4">
    <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
    <span class="w3-bar-item w3-right">Admine panel</span>
</div>


<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left w3-blue w3-quarter" id="mySidebar"><br>

    <div class="w3-container">
        <div class="w3-col s4">
            <img src="/w3images/avatar2.png" class="w3-circle w3-margin-right" style="width:46px">
        </div>
        <div class="w3-col s8 w3-bar">
            <span>Welcome,
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
            </span>
        </div>
    </div>
    <div class="w3-container w3-center">
        <h5>Dashboard</h5>
    </div>
    <div class="w3-bar-block">
        <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
        <a href="<?= Url::home()?>" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Home</a>
        <a href="<?= Url::toRoute('/admin')?>" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Admin Main</a>
        <a href="<?= Url::toRoute(['users/index'])?>" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Users</a>
        <a href="<?= Url::toRoute(['locales/index'])?>" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bullseye fa-fw"></i>  Locales</a>


        <button class="w3-button w3-block w3-left-align" onclick="myAccFunc(categories)"><i class="fa fa-users fa-fw"></i> Categories edit <i class="fa fa-caret-down"></i></button>
        <div id="categories" class="w3-bar-block w3-hide w3-white w3-card-4">
            <a href="<?= Url::toRoute(['categories/index'])?>" class="w3-bar-item w3-button w3-dark-gray">Categories</a>
            <a href="<?= Url::toRoute(['categories-translation/index'])?>" class="w3-bar-item w3-button w3-dark-gray">Categories Translation</a>
        </div>

        <button class="w3-button w3-block w3-left-align" onclick="myAccFunc(contacts)"><i class="fa fa-users fa-fw"></i> Contacts edit <i class="fa fa-caret-down"></i></button>
        <div id="contacts" class="w3-bar-block w3-hide w3-white w3-card-4">
            <a href="<?= Url::toRoute(['contacts/index'])?>" class="w3-bar-item w3-button w3-dark-gray">Contacts</a>
            <a href="<?= Url::toRoute(['contacts-translation/index'])?>" class="w3-bar-item w3-button w3-dark-gray">Contacts Translation</a>
        </div>

        <button class="w3-button w3-block w3-left-align" onclick="myAccFunc(customers)"><i class="fa fa-users fa-fw"></i> Customers edit <i class="fa fa-caret-down"></i></button>
        <div id="customers" class="w3-bar-block w3-hide w3-white w3-card-4">
            <a href="<?= Url::toRoute(['customers/index'])?>" class="w3-bar-item w3-button w3-dark-gray">Customers</a>
            <a href="<?= Url::toRoute(['customers-translation/index'])?>" class="w3-bar-item w3-button w3-dark-gray">Customers Translation</a>
        </div>

        <button class="w3-button w3-block w3-left-align" onclick="myAccFunc(partners)"><i class="fa fa-users fa-fw"></i> Partners edit <i class="fa fa-caret-down"></i></button>
        <div id="partners" class="w3-bar-block w3-hide w3-white w3-card-4">
            <a href="<?= Url::toRoute(['partners/index'])?>" class="w3-bar-item w3-button w3-dark-gray">Partners</a>
            <a href="<?= Url::toRoute(['partners-translation/index'])?>" class="w3-bar-item w3-button w3-dark-gray">Partners Translation</a>
        </div>

        <button class="w3-button w3-block w3-left-align" onclick="myAccFunc(references)"><i class="fa fa-users fa-fw"></i> References edit <i class="fa fa-caret-down"></i></button>
        <div id="references" class="w3-bar-block w3-hide w3-white w3-card-4">
            <a href="<?= Url::toRoute(['references/index'])?>" class="w3-bar-item w3-button w3-dark-gray">References</a>
            <a href="<?= Url::toRoute(['references-translation/index'])?>" class="w3-bar-item w3-button w3-dark-gray">References Translation</a>
        </div>

        <button class="w3-button w3-block w3-left-align" onclick="myAccFunc(services)"><i class="fa fa-users fa-fw"></i> Services edit <i class="fa fa-caret-down"></i></button>
        <div id="services" class="w3-bar-block w3-hide w3-white w3-card-4">
            <a href="<?= Url::toRoute(['services/index'])?>" class="w3-bar-item w3-button w3-dark-gray">Partners</a>
            <a href="<?= Url::toRoute(['services-translation/index'])?>" class="w3-bar-item w3-button w3-dark-gray">Services Translation</a>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

</nav>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main">
        <div class="w3-row">
                <div class="container w3-threequarter w3-right">
                    <?= Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?>
                    <?= Alert::widget() ?>
                    <?= $content ?>
                </div>
       <div class="w3-row w3-threequarter w3-right">


        <!-- Header -->
<!--        <header class="w3-container" style="padding-top:22px">-->
<!--            <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>-->
<!--        </header>-->
<!---->
<!--        <div class="w3-row-padding w3-margin-bottom ">-->
<!--            <div class="w3-quarter">-->
<!--                <div class="w3-container w3-red w3-padding-16">-->
<!--                    <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>-->
<!--                    <div class="w3-right">-->
<!--                        <h3>52</h3>-->
<!--                    </div>-->
<!--                    <div class="w3-clear"></div>-->
<!--                    <h4>Messages</h4>-->
<!--                     Google Analytics-->
<!--                    <script>-->
<!--                        window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;-->
<!--                        ga('create', 'UA-XXXXX-Y', 'auto');-->
<!--                        ga('send', 'pageview');-->
<!--                    </script>-->
<!--                    <script async src='https://www.google-analytics.com/analytics.js'></script>-->
<!--                    <!-- End Google Analytics -->-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="w3-quarter">-->
<!--                <div class="w3-container w3-blue w3-padding-16">-->
<!--                    <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>-->
<!--                    <div class="w3-right">-->
<!--                        <h3>99</h3>-->
<!--                    </div>-->
<!--                    <div class="w3-clear"></div>-->
<!--                    <h4>Views</h4>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="w3-quarter">-->
<!--                <div class="w3-container w3-teal w3-padding-16">-->
<!--                    <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>-->
<!--                    <div class="w3-right">-->
<!--                        <h3>23</h3>-->
<!--                    </div>-->
<!--                    <div class="w3-clear"></div>-->
<!--                    <h4>Shares</h4>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="w3-quarter">-->
<!--                <div class="w3-container w3-orange w3-text-white w3-padding-16">-->
<!--                    <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>-->
<!--                    <div class="w3-right">-->
<!--                        <h3>50</h3>-->
<!--                    </div>-->
<!--                    <div class="w3-clear"></div>-->
<!--                    <h4>Users</h4>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="w3-panel">-->
<!--            <div class="w3-row-padding" style="margin:0 -16px">-->
<!--                <div class="w3-third">-->
<!--                    <h5>Regions</h5>-->
<!--                    <img src="/w3images/region.jpg" style="width:100%" alt="Google Regional Map">-->
<!--                </div>-->
<!--                <div class="w3-twothird">-->
<!--                    <h5>Feeds</h5>-->
<!--                    <table class="w3-table w3-striped w3-white">-->
<!--                        <tr>-->
<!--                            <td><i class="fa fa-user w3-text-blue w3-large"></i></td>-->
<!--                            <td>New record, over 90 views.</td>-->
<!--                            <td><i>10 mins</i></td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td><i class="fa fa-bell w3-text-red w3-large"></i></td>-->
<!--                            <td>Database error.</td>-->
<!--                            <td><i>15 mins</i></td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td><i class="fa fa-users w3-text-yellow w3-large"></i></td>-->
<!--                            <td>New record, over 40 users.</td>-->
<!--                            <td><i>17 mins</i></td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td><i class="fa fa-comment w3-text-red w3-large"></i></td>-->
<!--                            <td>New comments.</td>-->
<!--                            <td><i>25 mins</i></td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td><i class="fa fa-bookmark w3-text-blue w3-large"></i></td>-->
<!--                            <td>Check transactions.</td>-->
<!--                            <td><i>28 mins</i></td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td><i class="fa fa-laptop w3-text-red w3-large"></i></td>-->
<!--                            <td>CPU overload.</td>-->
<!--                            <td><i>35 mins</i></td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td><i class="fa fa-share-alt w3-text-green w3-large"></i></td>-->
<!--                            <td>New shares.</td>-->
<!--                            <td><i>39 mins</i></td>-->
<!--                        </tr>-->
<!--                    </table>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <hr>-->
<!--        <div class="w3-container">-->
<!--            <h5>General Stats</h5>-->
<!--            <p>New Visitors</p>-->
<!--            <div class="w3-grey">-->
<!--                <div class="w3-container w3-center w3-padding w3-green" style="width:25%">+25%</div>-->
<!--            </div>-->
<!---->
<!--            <p>New Users</p>-->
<!--            <div class="w3-grey">-->
<!--                <div class="w3-container w3-center w3-padding w3-orange" style="width:50%">50%</div>-->
<!--            </div>-->
<!---->
<!--            <p>Bounce Rate</p>-->
<!--            <div class="w3-grey">-->
<!--                <div class="w3-container w3-center w3-padding w3-red" style="width:75%">75%</div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <hr>-->
<!---->
<!--        <div class="w3-container">-->
<!--            <h5>Countries</h5>-->
<!--            <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">-->
<!--                <tr>-->
<!--                    <td>United States</td>-->
<!--                    <td>65%</td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>UK</td>-->
<!--                    <td>15.7%</td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>Russia</td>-->
<!--                    <td>5.6%</td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>Spain</td>-->
<!--                    <td>2.1%</td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>India</td>-->
<!--                    <td>1.9%</td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>France</td>-->
<!--                    <td>1.5%</td>-->
<!--                </tr>-->
<!--            </table><br>-->
<!--            <button class="w3-button w3-dark-grey">More Countries  <i class="fa fa-arrow-right"></i></button>-->
<!--        </div>-->
<!--        <hr>-->
<!--        <div class="w3-container">-->
<!--            <h5>Recent Users</h5>-->
<!--            <ul class="w3-ul w3-card-4 w3-white">-->
<!--                <li class="w3-padding-16">-->
<!--                    <img src="/w3images/avatar2.png" class="w3-left w3-circle w3-margin-right" style="width:35px">-->
<!--                    <span class="w3-xlarge">Mike</span><br>-->
<!--                </li>-->
<!--                <li class="w3-padding-16">-->
<!--                    <img src="/w3images/avatar5.png" class="w3-left w3-circle w3-margin-right" style="width:35px">-->
<!--                    <span class="w3-xlarge">Jill</span><br>-->
<!--                </li>-->
<!--                <li class="w3-padding-16">-->
<!--                    <img src="/w3images/avatar6.png" class="w3-left w3-circle w3-margin-right" style="width:35px">-->
<!--                    <span class="w3-xlarge">Jane</span><br>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
<!--        <hr>-->
<!---->
<!--        <div class="w3-container">-->
<!--            <h5>Recent Comments</h5>-->
<!--            <div class="w3-row">-->
<!--                <div class="w3-col m2 text-center">-->
<!--                    <img class="w3-circle" src="/w3images/avatar3.png" style="width:96px;height:96px">-->
<!--                </div>-->
<!--                <div class="w3-col m10 w3-container">-->
<!--                    <h4>John <span class="w3-opacity w3-medium">Sep 29, 2014, 9:12 PM</span></h4>-->
<!--                    <p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="w3-row">-->
<!--                <div class="w3-col m2 text-center">-->
<!--                    <img class="w3-circle" src="/w3images/avatar1.png" style="width:96px;height:96px">-->
<!--                </div>-->
<!--                <div class="w3-col m10 w3-container">-->
<!--                    <h4>Bo <span class="w3-opacity w3-medium">Sep 28, 2014, 10:15 PM</span></h4>-->
<!--                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <br>-->
<!--        <div class="w3-container w3-dark-grey w3-padding-32">-->
<!--            <div class="w3-row">-->
<!--                <div class="w3-container w3-third">-->
<!--                    <h5 class="w3-bottombar w3-border-green">Demographic</h5>-->
<!--                    <p>Language</p>-->
<!--                    <p>Country</p>-->
<!--                    <p>City</p>-->
<!--                </div>-->
<!--                <div class="w3-container w3-third">-->
<!--                    <h5 class="w3-bottombar w3-border-red">System</h5>-->
<!--                    <p>Browser</p>-->
<!--                    <p>OS</p>-->
<!--                    <p>More</p>-->
<!--                </div>-->
<!--                <div class="w3-container w3-third">-->
<!--                    <h5 class="w3-bottombar w3-border-orange">Target</h5>-->
<!--                    <p>Users</p>-->
<!--                    <p>Active</p>-->
<!--                    <p>Geo</p>-->
<!--                    <p>Interests</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <!-- Footer -->-->
<!--        <footer class="w3-container w3-padding-16 w3-light-grey">-->
<!--            <h4>FOOTER</h4>-->
<!--            <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>-->
<!--        </footer>-->
<!---->
<!--        <!-- End page content -->-->
<!--    </div>-->
<!--    </div>-->

    <script>
        // Get the Sidebar
        var mySidebar = document.getElementById("mySidebar");

        // Get the DIV with overlay effect
        var overlayBg = document.getElementById("myOverlay");

        // Toggle between showing and hiding the sidebar, and add overlay effect
        function w3_open() {
            if (mySidebar.style.display === 'block') {
                mySidebar.style.display = 'none';
                overlayBg.style.display = "none";
            } else {
                mySidebar.style.display = 'block';
                overlayBg.style.display = "block";
            }
        }

        // Close the sidebar with the close button
        function w3_close() {
            mySidebar.style.display = "none";
            overlayBg.style.display = "none";
        }
    </script>

<!--Left DashBord-->
<script>
    function myAccFunc(id) {
        let elem = id.attributes[0].value;
        let x = document.getElementById(elem);

        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
            x.previousElementSibling.className += " w3-teal";
        } else {
            x.className = x.className.replace(" w3-show", "");
            x.previousElementSibling.className =
                x.previousElementSibling.className.replace(" w3-teal", "");
        }
    }

</script>



</div>

<footer class="footer">
    <div class="w3-container ">
        <p class="w3-center" style="color: #0D3349">Synpgotech Engineering LLC&copy; <?= date('Y') ?></p>
        <p class="w3-center" style="color: #0D3349"><?= Yii::powered(). ' on Server ' . $_SERVER['SERVER_SOFTWARE'] ?></p>
        <p class="w3-center" style="color: #0D3349"><?= 'php: ' . phpversion() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
