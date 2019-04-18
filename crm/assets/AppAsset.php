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
        'css/site.css',
        'css/all.css',
        'css/bootstrap.min.css',
        'css/responsive.css',
        'css/style.css',
     
    ];
  
    public $js = [
        'ajax-contact.js',
        'jquery.easing.min.js',
        'script.js',
        'theme.js',
     // 'js/script.js'
    ];
    public $jsOptions=[
        'position'=>\yii\web\View::POS_END
];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
