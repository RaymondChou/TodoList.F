<hr>

<footer>
    <p class="pull-right"><a href="#">Back to top</a></p>
    <p>Designed and built with all the love in the world <a href="http://www.ledbk.com" target="_blank">EdgeTech</a> by <a href="http://www.ledbk.com" target="_blank">Zhouyt (freezestart)</a>.</p>
    <p>Code licensed under the <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License v2.0</a>.</p>

</footer>

</div> <!-- /container -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo site_url()?>js/jquery-1.7.2.min.js"></script>
<script src="<?php echo site_url()?>js/bootstrap-transition.js"></script>
<script src="<?php echo site_url()?>js/bootstrap-alert.js"></script>
<script src="<?php echo site_url()?>js/bootstrap-modal.js"></script>
<script src="<?php echo site_url()?>js/bootstrap-dropdown.js"></script>
<script src="<?php echo site_url()?>js/bootstrap-scrollspy.js"></script>
<script src="<?php echo site_url()?>js/bootstrap-tab.js"></script>
<script src="<?php echo site_url()?>js/bootstrap-tooltip.js"></script>
<script src="<?php echo site_url()?>js/bootstrap-popover.js"></script>
<script src="<?php echo site_url()?>js/bootstrap-button.js"></script>
<script src="<?php echo site_url()?>js/bootstrap-collapse.js"></script>
<script src="<?php echo site_url()?>js/bootstrap-carousel.js"></script>
<script src="<?php echo site_url()?>js/bootstrap-typeahead.js"></script>
<script src="<?php echo site_url()?>js/My97DatePicker/WdatePicker.js"></script>
<script src="<?php echo site_url()?>js/jquery-ui.min.js"></script>
<script src="<?php echo site_url()?>js/tag-it.js"></script>
<link href="<?php echo site_url()?>css/tagit.ui-zendesk.css" rel="stylesheet">
<link href="<?php echo site_url()?>css/jquery.tagit.css" rel="stylesheet">
<link href="<?php echo site_url()?>css/jquery-ui.css" rel="stylesheet">
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="<?php echo site_url()?>js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="<?php echo site_url()?>js/jquery.fileupload.js"></script>
<!-- The File Upload file processing plugin -->
<script src="<?php echo site_url()?>js/jquery.fileupload-fp.js"></script>
<!-- The File Upload user interface plugin -->
<script src="<?php echo site_url()?>js/jquery.fileupload-ui.js"></script>
<script>
    $('.tooltip-f').tooltip();
    $('.popover-f').popover();
</script>
<script>
    $(function(){
        var sampleTags = ['c++', 'java', 'php', 'coldfusion', 'javascript', 'asp', 'ruby', 'python', 'c', 'scala', 'groovy', 'haskell', 'perl', '日你妹妹', 'apl', 'cobol', 'go', 'lua','你好'];

        //-------------------------------
        // Minimal
        //-------------------------------
        $('#myTags').tagit();

        //-------------------------------
        // Single field
        //-------------------------------
        $('#singleFieldTags').tagit({
            availableTags: sampleTags,
            // This will make Tag-it submit a single form value, as a comma-delimited field.
            singleField: true,
            singleFieldNode: $('#mySingleField')
        });

        // singleFieldTags2 is an INPUT element, rather than a UL as in the other
        // examples, so it automatically defaults to singleField.
        $('#singleFieldTags2').tagit({
            availableTags: sampleTags
        });


        //-------------------------------
        // Preloading data in markup
        //-------------------------------
        $('#myULTags').tagit({
            availableTags: sampleTags, // this param is of course optional. it's for autocomplete.
            // configure the name of the input field (will be submitted with form), default: item[tags]
            itemName: 'item',
            fieldName: 'tags'
        });

        //-------------------------------
        // Tag events
        //-------------------------------
        var eventTags = $('#eventTags');
        eventTags.tagit({
            availableTags: sampleTags,
            onTagRemoved: function(evt, tag) {
                console.log(evt);
                alert('This tag is being removed: ' + eventTags.tagit('tagLabel', tag));
            },
            onTagClicked: function(evt, tag) {
                console.log(tag);
                alert('This tag was clicked: ' + eventTags.tagit('tagLabel', tag));
            }
        }).tagit('option', 'onTagAdded', function(evt, tag) {
                // Add this callbackafter we initialize the widget,
                // so that onTagAdded doesn't get called on page load.
                alert('This tag is being added: ' + eventTags.tagit('tagLabel', tag));
            });

        //-------------------------------
        // Tag-it methods
        //-------------------------------
        $('#methodTags').tagit({
            availableTags: sampleTags
        });

        //-------------------------------
        // Allow spaces without quotes.
        //-------------------------------
        $('#allowSpacesTags').tagit({
            availableTags: sampleTags,
            allowSpaces: true
        });

        //-------------------------------
        // Remove confirmation
        //-------------------------------
        $('#removeConfirmationTags').tagit({
            availableTags: sampleTags,
            removeConfirmation: true
        });

    });
</script>

<script id="template-upload" type="text/x-tmpl">
    {% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td class="preview"><span class="fade"></span></td>
        <td class="name"><span>{%=file.name%}</span></td>
        <td class="size"><span>{%=o.formatFileSize(file.size)%}</span></td>
        {% if (file.error) { %}
        <td class="error" colspan="2"><span class="label label-important">{%=locale.fileupload.error%}</span> {%=locale.fileupload.errors[file.error] || file.error%}</td>
        {% } else if (o.files.valid && !i) { %}
        <td>
            <div class="progress progress-success progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="bar" style="width:0%;"></div></div>
        </td>
        <td class="start">{% if (!o.options.autoUpload) { %}
            <button class="btn btn-primary">
                <i class="icon-upload icon-white"></i>
                <span>{%=locale.fileupload.start%}</span>
            </button>
            {% } %}</td>
        {% } else { %}
        <td colspan="2"></td>
        {% } %}
        <td class="cancel">{% if (!i) { %}
            <button class="btn btn-warning">
                <i class="icon-ban-circle icon-white"></i>
                <span>{%=locale.fileupload.cancel%}</span>
            </button>
            {% } %}</td>
    </tr>
    {% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
    {% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        {% if (file.error) { %}
        <td></td>
        <td class="name"><span>{%=file.name%}</span></td>
        <td class="size"><span>{%=o.formatFileSize(file.size)%}</span></td>
        <td class="error" colspan="2"><span class="label label-important">{%=locale.fileupload.error%}</span> {%=locale.fileupload.errors[file.error] || file.error%}</td>
        {% } else { %}
        <td class="preview">{% if (file.thumbnail_url) { %}
            <a href="{%=file.url%}" title="{%=file.name%}" rel="gallery" download="{%=file.name%}"><img src="{%=file.thumbnail_url%}"></a>
            {% } %}</td>
        <td class="name">
            <a href="{%=file.url%}" title="{%=file.name%}" rel="{%=file.thumbnail_url&&'gallery'%}" download="{%=file.name%}">{%=file.name%}</a>
        </td>
        <td class="size"><span>{%=o.formatFileSize(file.size)%}</span></td>
        <td colspan="2"></td>
        {% } %}
        <td class="delete">
            <button class="btn btn-danger" data-type="{%=file.delete_type%}" data-url="{%=file.delete_url%}">
                <i class="icon-trash icon-white"></i>
                <span>{%=locale.fileupload.destroy%}</span>
            </button>
            <input type="checkbox" name="delete" value="1">
        </td>
    </tr>
    {% } %}
</script>
</body>
</html>