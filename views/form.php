<?php
/** @var \common\modules\fileupload\FileUploadUI $this */
use common\modules\foundation\helpers\Html;

$context = $this->context;
?>
    <!-- The file upload form used as target for the file upload widget -->
<?= Html::beginForm($context->url, 'post', $context->options); ?>
    <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
    <div class="fileupload-buttonbar row">
        <div class="columns small-12 medium-12 large-12">
	        <a class="button fileinput-button small-4 medium-4 large-4 columns">
		        <?= Html::icon('plus')?><span><?= Yii::t('fileupload', 'Add files') ?>...</span>
		        <?= $context->model instanceof \yii\base\Model && $context->attribute !== null
			        ? Html::activeFileInput($context->model, $context->attribute, $context->fieldOptions)
			        : Html::fileInput($context->name, $context->value, $context->fieldOptions);?>
	        </a>
	        <button type="submit" class="button small-4 medium-4 large-4 columns start">
		        <?= Html::icon('upload')?>
		        <span><?= Yii::t('fileupload', 'Start upload') ?></span>
	        </button>
	        <button type="reset" class="button  small-4 medium-4 large-4 columns cancel">
		        <?= Html::icon('prohibited')?>
		        <span><?= Yii::t('fileupload', 'Cancel upload') ?></span>
	        </button>
        </div>
	    <div class="columns small-12 medium-12 large-12">
            <span class="fileupload-process"></span>
        </div>
        <!-- The global progress state -->
        <div class="columns small-12 medium-12 large-12 fileupload-progress hide fade">
            <!-- The global progress bar -->
            <div class="progress active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                <span class="meter" style="width:0%;"></span>
            </div>
            <!-- The extended global progress state -->
            <div class="progress-extended">&nbsp;</div>
        </div>
        <div class="columns small-12 medium-12 large-12">
            <table role="presentation" class="hide fade small-12 medium-12 large-12"><tbody class="files"></tbody></table>
        </div>
    </div>
    <!-- The table listing the files available for upload/download -->
<?= Html::endForm();?>