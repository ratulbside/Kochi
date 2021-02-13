<?php


get_header();
?>
<style type="text/css">
body {
    background-color: #b19b83;
}
</style>
<div class="container-kasin">
    <div class="single-background kasin">
        <div class="single-row one">
            <div class="single-row-left">
                <h3 class="single-name">Kashin Patel</h3>
                <h3 class="single-institute">Sir J. J. School of Art</h3>
                <h3 class="single-medium">Drawing on paper and iPad</h3>
            </div>
            <div class="single-row-right">
                <a class="popup-video" href="https://www.youtube.com/watch?v=dQWg9QoWt7c">
                    <img src="<?php echo get_theme_file_uri(); ?>/images/Kashin.jpg">
                </a>
                <h3 class="single-title">Doing the Everyday</h3>
            </div>
        </div>
        <div class="single-row two">
            <div class="single-row-left">
                <div class="single-concept-note">
                    <p>'Doing the Everyday' is about everyday actions and thoughts. The lockdown has compelled us all to spend a significant amount of time indoors, by ourselves; It has caused a greater awareness in many of us even, while we do routine things such as eating, sleeping, or even clipping our fingernails. Never before have we been so obsessed about cleaning windows or our cupboards. Being locked in confined spaces, our homes, has made such activities necessary to maintain a sense of purpose and sanity. This mini-book of drawings highlights these little acts that have kept us going through the ongoing pandemic.</p>
                </div>
            </div>
            <div class="single-row-right">

            </div>
        </div>
        <div class="single-row three">
            <div class="single-row-left">
                <h3 class="single-location">Mumbai</h3>
            </div>
            <div class="single-row-right">
                <h3 class="single-duration">Duration: 3.10</h3>
            </div>
        </div>
        <div class="single-row four">
            <div class="single-row-left">

            </div>
            <div class="single-row-right">

            </div>
        </div>
    </div>
    <?php 
                get_template_part( 'template-parts/single-switch', 'switch' );

             ?>

</div>

<?php
get_footer();
?>

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