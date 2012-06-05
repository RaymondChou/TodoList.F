<style>
    #timeline-embed{
        margin:0px !important;
        border:0px solid #CCC !important;
        padding:0px !important;
        -webkit-border-radius:0px !important;
        -moz-border-radius:0px !important;
        border-radius:0px !important;
        -moz-box-shadow:0 0px 0px rgba(0, 0, 0, 0.25) !important;
        -webkit-box-shadow:0 0px 0px rgba(0, 0, 0, 0.25) !important;
        box-shadow:0px 0px 0px rgba(0, 0, 0, 0.25) !important;
    }
</style>

<div class="container">
    <div id="timeline-embed"></div>
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
</div>