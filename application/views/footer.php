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
<script src="<?php echo site_url()?>js/jquery-ui.min.js"></script>
<script src="<?php echo site_url()?>js/tag-it.js"></script>
<link href="<?php echo site_url()?>css/tagit.ui-zendesk.css" rel="stylesheet">
<link href="<?php echo site_url()?>css/jquery.tagit.css" rel="stylesheet">
<link href="<?php echo site_url()?>css/jquery-ui.css" rel="stylesheet">
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
</body>
</html>