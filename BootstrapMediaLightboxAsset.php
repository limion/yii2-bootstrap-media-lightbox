<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace limion\bootstraplightbox;

use yii\web\AssetBundle;

/**
 * @author Vladyslav Holovko <vlad.holovko@gmail.com>
 */
class BootstrapMediaLightboxAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bootstrap-plus/bootstrap-media-lightbox';
    public $css = ['bootstrap-media-lightbox.css'];
    public $js = ['bootstrap-media-lightbox.min.js'];
    public $depends = ['yii\web\JqueryAsset'];
}
