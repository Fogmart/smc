<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class VendorAsset extends AssetBundle
{
    public $sourcePath  = '@vendor';
//    public $baseUrl = '@web';
    public $css = [
        'kartik-v/bootstrap-fileinput/css/fileinput.css'
    ];
    public $js = [
        'kartik-v/bootstrap-fileinput/js/fileinput.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
