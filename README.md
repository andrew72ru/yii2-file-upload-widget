BlueImp File Upload Widget for Yii2
===================================

Renders a [BlueImp jQuery File Upload plugin](http://blueimp.github.io/jQuery-File-Upload/).

Based on https://github.com/2amigos/yii2-file-upload-widget

Render widget without Bootstrap, with Foundation

Usage
-----

The widget comes with two flavors:

- FileUpload: [Basic](http://blueimp.github.io/jQuery-File-Upload/basic.html) and
    [BasicPlus](http://blueimp.github.io/jQuery-File-Upload/basic-plus.html)
- FileUploadUI: [BasicPlus UI](http://blueimp.github.io/jQuery-File-Upload/index.html)


```PHP
<?php
use dosamigos\fileupload\FileUpload;

// without UI
?>

<?= FileUpload::widget([
	'model' => $model,
	'attribute' => 'image',
	'url' => ['media/upload', 'id' => $model->id], // your url, this is just for demo purposes,
	'options' => ['accept' => 'image/*'],
	'clientOptions' => [
		'maxFileSize' => 2000000
	],
	// Also, you can specify jQuery-File-Upload events
	// see: https://github.com/blueimp/jQuery-File-Upload/wiki/Options#processing-callback-options
	'clientEvents' => [
	    'fileuploaddone' => 'function(e, data) {
	                            console.log(e);
	                            console.log(data);
	                        }',
        'fileuploadfail' => 'function(e, data) {
	                            console.log(e);
	                            console.log(data);
                            }',
	],
]);?>

<?php

// with UI

use dosamigos\fileupload\FileUploadUI;
?>
<?= FileUploadUI::widget([
	'model' => $model,
	'attribute' => 'image',
	'url' => ['media/upload', 'id' => $tour_id],
	'gallery' => false,
	'fieldOptions' => [
    		'accept' => 'image/*'
	],
	'clientOptions' => [
    		'maxFileSize' => 2000000
	],
	// ... 
	'clientEvents' => [
    	    'fileuploaddone' => 'function(e, data) {
    	                            console.log(e);
    	                            console.log(data);
    	                        }',
            'fileuploadfail' => 'function(e, data) {
    	                            console.log(e);
    	                            console.log(data);
                                }',
    ],
]);
?>
```

Further Information
-------------------
Please, check the [jQuery File Upload documentation](https://github.com/blueimp/jQuery-File-Upload/wiki) for further
information about its configuration options.

