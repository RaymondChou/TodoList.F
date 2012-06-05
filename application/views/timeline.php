<div class="container">
    <div>
        <div id="timeline-embed"></div>
    </div>

    <script type="text/javascript">
        var timeline_config = {
            width: 	"100%",
            height: "100%",
            source: '<?php echo site_url("timeline/json")?>',
            //start_at_end:	true,					//OPTIONAL
            //hash_bookmark: true,					//OPTIONAL
            css: 	'<?php echo site_url()?>js/timeline/css/timeline.css',	//OPTIONAL
            js: 	'<?php echo site_url()?>js/timeline/js/timeline-min.js'	//OPTIONAL
        }
    </script>

    <script type="text/javascript" src="<?php echo site_url()?>js/timeline/js/timeline-embed.js"></script>
    <!-- END Timeline Embed -->
