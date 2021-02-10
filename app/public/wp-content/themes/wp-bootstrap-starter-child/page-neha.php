<?php


get_header();
?>


<div class="container-neha">
    <div class="single-background neha">
        <div class="single-row one">
            <div class="single-row-left">
                <h3 class="single-name">Neha Zode</h3>
                <h3 class="single-title">Home Corners</h3>
                
            </div>
            <div class="single-row-right">

            </div>
        </div>
        <div class="single-row two">
            <div class="single-row-left">
            <div class="single-concept-note">
                    <p>To stay safe from Corona we adopted the Lockdown as a self-responsibility. Being in closed spaces
                        became intolerable and we eagerly waited for it to end. Through this video, I have tried to show
                        the impatience each of us had for the Lockdown to get over.</p>
                </div>
            </div>
            <div class="single-row-right">
                <h3 class="single-duration">Duration: 1.48</h3>
                <h3 class="single-location">Pune</h3>

            </div>
        </div>
        <div class="single-row three">
            <div class="single-row-left">

            </div>
            <div class="single-row-right video">
                <a class="popup-video" href="https://www.youtube.com/watch?v=ZJJ6uzlVHsg">
                    <img src="<?php echo get_theme_file_uri(); ?>/images/Neha.jpg">
                </a>
            </div>
        </div>
        <div class="single-row four">
            <div class="single-row-left popup-gallery">
                <h3 class="single-institute">Government college of art and design</h3>
            </div>
            <div class="single-row-right">
                <h3 class="single-medium">videos</h3>
            </div>
        </div>
    </div>
    <?php 
                get_template_part( 'template-parts/single-switch', 'switch' );

             ?>
</div>



<script type="text/javascript">
jQuery(function() {
    jQuery('.popup-video').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,

        fixedContentPos: false
    });
});
</script>