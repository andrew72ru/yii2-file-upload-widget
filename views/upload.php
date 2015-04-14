<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <p class="name"><strong>{%=file.name%}</strong></p>
            <strong class="error alert-text"></strong>
        </td>
        <td style="width: 60%;">
            <p class="size"><?= Yii::t('fileupload', 'Processing') ?>...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
        </td>
        <td>
            <div class="btn-group">
            {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-success start" disabled>
                    <i class="fa fa-upload"></i>
                    <span><?= Yii::t('fileupload', 'Start') ?></span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-warning cancel">
                    <i class="fa fa-ban"></i>
                    <span><?= Yii::t('fileupload', 'Cancel') ?></span>
                </button>
            {% } %}
            </div>
        </td>
    </tr>
{% } %}
</script>