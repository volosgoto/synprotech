<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;


class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/w3.css',
        'css/font-awesome.min.css',
        'css/style.css',
        'css/partners.css',
        'css/reference.css',
        'css/scroll.css',

    ];
    public $js = [
        'js/app.js',
        'js/carousel.js',
        'js/scroll.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
