<?php


get_header();
?>

<div class="container-kasin">
    <div class="single-background kasin">
        <div class="single-row one">
            <div class="single-row-left">
                <h3 class="single-name">Kasin</h3>
                <h3 class="single-institute">DR.B.A.M.U.A</h3>
                <h3 class="single-medium">videos</h3>
            </div>
            <div class="single-row-right">
                <a class="popup-video" href="https://www.youtube.com/watch?v=dQWg9QoWt7c">
                    <img id="varsha-two" src="<?php echo get_theme_file_uri(); ?>/images/Kashin.jpg">
                </a>
                <h3 class="single-title">sound</h3>
            </div>
        </div>
        <div class="single-row two">
            <div class="single-row-left">
                <div class="single-concept-note">
                    <p>In the above painting, I wanted to mentioned that what is the condition of people in lockdown and
                        how people are lived their life dramatically , drastically, and may be decisively . The lockdown
                        applied to three main areas physical movement out of the home, social distancing when people
                        outside home and restricted availability of most public services. All people having same rule
                        "stay home and stay safe." Fish are packed in the pot. she can not surview anywhere same way the
                        people having same condition like fish. Here I only said that it is safe when you are in home
                        and it might be risky if u go out of home.</p>
                </div>
            </div>
            <div class="single-row-right">

            </div>
        </div>
        <div class="single-row three">
            <div class="single-row-left">
                <h3 class="single-location">Pune</h3>
            </div>
            <div class="single-row-right">
                <h3 class="single-duration">Duration: 1.48</h3>
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