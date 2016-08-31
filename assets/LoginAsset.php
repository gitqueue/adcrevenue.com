<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',		
		'css/bootstrap.min.css',
		'css/style.css',
		'css/form-elements.css',
		'fonts/css/font-awesome.min.css',
    ];
    public $js = [
		'js/bootstrap.min.js',				
		'js/jquery.backstretch.min.js',		
		'js/placeholder.js',
		'js/scripts.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
