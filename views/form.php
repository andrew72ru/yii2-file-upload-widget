<?php
/** @var \common\modules\fileupload\FileUploadUI $this */
use yii\helpers\Html;
use kartik\icons\Icon;
Icon::map($this);

$context = $this->context;
?>
    <!-- The file upload form used as target for the file upload widget -->
<?= Html::beginForm($context->url, 'post', $context->options); ?>
    <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
    <div class="row fileupload-buttonbar">
        <div class="col-xs-24 col-sm-24 col-md-24 col-lg-24">
            <div class="btn-group btn-group-justified">
                <a class="btn btn-primary btn-lg fileinput-button">
                    <?= Icon::show('plus')?> <span><?= Yii::t('fileupload', 'Add files') ?>...</span>
                    <?= $context->model instanceof \yii\base\Model && $context->attribute !== null
                        ? Html::activeFileInput($context->model, $context->attribute, $context->fieldOptions)
                        : Html::fileInput($context->name, $context->value, $context->fieldOptions);?>
                </a>
                <div class="btn-group" role="group">
                    <button type="submit" class="btn btn-primary btn-lg start">
                        <?= Icon::show('upload')?>
                        <span><?= Yii::t('fileupload', 'Start upload') ?></span>
                    </button>
                </div>
                <div class="btn-group" role="group">
                    <button type="reset" class="btn btn-primary btn-lg cancel">
                        <?= Icon::show('ban')?>
                        <span><?= Yii::t('fileupload', 'Cancel upload') ?></span>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-xs-24 col-sm-24 col-md-24 col-lg-24">
            <span class="fileupload-process"></span>
        </div>
        <div class="col-xs-24 col-sm-24 col-md-24 col-lg-24">
            <!-- The global progress state -->
            <br>
            <div class="fileupload-progress fade">
                <!-- The global progress bar -->
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-info" style="width:0%;"></div>
                </div>
                <!-- The extended global progress state -->
                <div class="progress-extended">&nbsp;</div>
            </div>
        </div>
        <div class="col-xs-24 col-sm-24 col-md-24 col-lg-24">
            <table role="presentation" class="table table-bordered table-responsive"><tbody class="files"></tbody></table>
        </div>
    </div>
    <!-- The table listing the files available for upload/download -->
<?= Html::endForm();?>