<?php
/**
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace common\fileupload;

use yii\web\AssetBundle;

/**
 * FileUploadAsset
 */
class FileUploadAsset extends AssetBundle
{
    public $sourcePath = '@common/modules/yii2-file-upload-widget/assets/';

    public $css = [
        'blueimp-file-upload/css/jquery.fileupload.css'
    ];

    public $js = [
        'blueimp-file-upload/js/vendor/jquery.ui.widget.js',
        'blueimp-file-upload/js/jquery.iframe-transport.js',
        'blueimp-file-upload/js/jquery.fileupload.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
} 