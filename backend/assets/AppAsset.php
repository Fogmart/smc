<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/aiSortTable.css',
        'css/bootstrap.min.css',
        'css/flexslider.css',
        'css/owl.carousel.min.css',
        'css/owl.theme.default.min.css',
        'css/site.css',
        'css/style.css',
    ];
    public $js = [
        'js/aiSortTable.js',
        'js/bootstrap.bundle.min.js',
        'js/bootstrap.min.js',
        'js/owl.carousel.min.js',
        'js/scripts.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
