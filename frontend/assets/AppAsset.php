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
        'assets/css/AdminLTE.min.css',
        'css/site.css',
        'assets/js/dist/sweetalert.css',
        'assets/semantic/semantic.min.css',
         'assets/jqueryui/jquery-ui.css',
    ];
    public $js = [
        
        'assets/js/dist/sweetalert.min.js',
        'assets/semantic/semantic.min.js',
        'assets/jqueryui/jquery-ui.min.js',
         'assets/ckeditor/ckeditor.js',
        'assets/ckeditor/samples/js/sample.js',
        'assets/angular/angular.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
