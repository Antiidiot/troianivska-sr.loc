<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'libs/libs.min.css',
        'css/main.min.css',
    ];
    public $js = [
        'libs/libs.min.js',
        'js/main.min.js',
    ];
    public $depends = [
    ];
}
