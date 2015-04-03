<?php
/**
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace common\fileupload;

use yii\web\AssetBundle;

/**
 * FileUploadPlusAsset
 */
class FileUploadPlusAsset extends AssetBundle
{
    public $sourcePath = '@common/fileupload/assets/';

    public $css = [
        'blueimp-file-upload/css/jquery.fileupload.css'
    ];

    public $js = [
        'blueimp-load-image/js/load-image.min.js',
        'blueimp-canvas-to-blob/js/canvas-to-blob.min.js',
        'blueimp-file-upload/js/jquery.iframe-transport.js',
        'blueimp-file-upload/js/jquery.fileupload-process.js',
        'blueimp-file-upload/js/jquery.fileupload-image.js',
        'blueimp-file-upload/js/jquery.fileupload-audio.js',
        'blueimp-file-upload/js/jquery.fileupload-video.js',
        'blueimp-file-upload/js/jquery.fileupload-validate.js'
    ];

    public $depends = [
        'common\fileupload\FileUploadAsset',
    ];
} 