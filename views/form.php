<?php
/** @var \common\modules\fileupload\FileUploadUI $this */
use common\modules\foundation\helpers\Html;

$context = $this->context;
?>
    <!-- The file upload form used as target for the file upload widget -->
<?= Html::beginForm($context->url, 'post', $context->options); ?>
    <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
    <div class="container fileupload-buttonbar">
        <div class="columns small-12 medium-12 large-12">
            <ul class="button-group even-3">
            <!-- The fileinput-button span is used to style the file input field as button -->
                <li>
                    <button class="button fileinput-button">
                        <?= Html::icon('plus')?>
                        <span><?= Yii::t('fileupload', 'Add files') ?>...</span>

                        <?= $context->model instanceof \yii\base\Model && $context->attribute !== null
                            ? Html::activeFileInput($context->model, $context->attribute, $context->fieldOptions)
                            : Html::fileInput($context->name, $context->value, $context->fieldOptions);?>

                    </button>
                </li>
                <li>
                    <button type="submit" class="button start">
                        <?= Html::icon('upload')?>
                        <span><?= Yii::t('fileupload', 'Start upload') ?></span>
                    </button>
                </li>
                <li>
                    <button type="reset" class="button cancel">
                        <?= Html::icon('prohibited')?>
                        <span><?= Yii::t('fileupload', 'Cancel upload') ?></span>
                    </button>
                </li>
            </ul>
            <!--<input type="checkbox" class="toggle">-->
            <!-- The global file processing state -->
            <span class="fileupload-process"></span>
        </div>
        <!-- The global progress state -->
        <div class="columns small-12 medium-12 large-12 fileupload-progress fade">
            <!-- The global progress bar -->
            <div class="progress active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                <span class="meter" style="width:0%;"></span>
            </div>
            <!-- The extended global progress state -->
            <div class="progress-extended">&nbsp;</div>
        </div>
        <div class="columns small-12 medium-12 large-12">
            <table role="presentation" class="small-12 medium-12 large-12"><tbody class="files"></tbody></table>
        </div>
    </div>
    <!-- The table listing the files available for upload/download -->
<?= Html::endForm();?>