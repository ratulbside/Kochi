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
                    <p>A lockdown is a restriction policy for people or a community to stay where they are, usually due to specific risks to themselves or to others if they moved and interacted freely.

The term " stay-at-home" or "shelter-in-place" is often used for lockdowns that affect an area rather than specific locations. So I thought that a full lockdown would mean you must stay where you are, and not exit or enter a building or a given area. I used corners of the home to quarantine myself, because I believe corners, with a borderline drawn, are also alike rooms.
</p>
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