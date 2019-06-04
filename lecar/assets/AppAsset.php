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
          'css/bootstrap.min.css',
	
		
       'css/magnific-popup.css',
		
		
       'css/templatemo-style.css',
    ];
    public $js = [
     'js/templatemo-style.js',
        'js/jquery.magnific-popup.min.js',
'js/jquery.magnific-popup.min.js',
    ];
    public $depends = [
     'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        
    ];
}
