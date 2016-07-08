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
        'css/my.css',
       // 'css/site.css',
       // 'css/global.css',
//		'admin/dist/css/AdminLTE.min.css',
//		'admin/dist/css/skins/skin-blue.min.css',
//		'font/css/font-awesome.min.css'


    ];
    public $js = [
//		'admin/dist/js/app.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
		'yii\bootstrap\BootstrapPluginAsset',
    ];
}
