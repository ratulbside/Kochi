<div class="single-switch">
	<a id="tool-tip" class="sticky-button" href="<?php echo get_site_url()?>">
		<img id="varsha-one" src="<?php echo get_theme_file_uri(); ?>/images/only-switch.jpg">
	</a>
</div>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>
<script type="text/javascript">
	tippy('#tool-tip', {
        content: "Press Here to go back",
    });
</script>