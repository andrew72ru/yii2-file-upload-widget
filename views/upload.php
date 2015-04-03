<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
        <td>
            <p class="size"><?= Yii::t('fileupload', 'Processing') ?>...</p>
            <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><span class="meter" style="width:0%;"></span></div>
        </td>
        <td>
            <ul class="button-group even-2">
            {% if (!i && !o.options.autoUpload) { %}
                <li>
                <button class="button success start" disabled>
                    <i class="fi-upload"></i>
                    <span><?= Yii::t('fileupload', 'Start') ?></span>
                </button>
                </li>
            {% } %}
            {% if (!i) { %}
                <li>
                <button class="button warning cancel">
                    <i class="fi-prohibited"></i>
                    <span><?= Yii::t('fileupload', 'Cancel') ?></span>
                </button>
                </li>
            {% } %}
            </ul>
        </td>
    </tr>
{% } %}
</script>