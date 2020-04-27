<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/animate.min.css',
        'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
        'css/bootstrap-select.min.css',
        'css/owl.carousel.css',
        'css/owl-carousel-theme.css',
        'css/bootstrap.min.css',
        'css/flexslider.css',
        'css/style.css',
    ];
    public $js = [
        'js/respond.js',
        'js/jquery.js',
        'js/owl.carousel.min.js',
        'js/bootstrap.min.js',
        'js/jquery-ui.min.js',
        'js/bootstrap-select.min.js',
        'js/wow.min.js',
        'js/supersized.3.1.3.min.js',
        'js/js.js',
        'js/jquery.steps.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
