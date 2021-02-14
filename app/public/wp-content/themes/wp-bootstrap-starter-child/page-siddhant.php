<?php


get_header();
?>
<style type="text/css">
body {
    background-color: #a4a59d;
}
</style>
            <div class="container-siddhant">
                <div class="single-background siddhant">
                    <div class="single-row one">
                        <div class="single-row-left">
                            <h3 class="single-institute">Bharti vidyapeeth’s college of fine arts</h3>
                        </div>
                        <div class="single-row-right">
                           <h3 class="single-medium">Medium: video</h3>
                           <h3 class="single-duration">Duration: 35 sec</h3>
                        </div>
                    </div>
                    <div class="single-row two">
                        <div class="single-row-left">
                            <h3 class="single-name">Siddhant Meher</h3>
                        </div>
                        <div class="single-row-right">
                            
                        </div>
                    </div>
                    <div class="single-row three">
                        <div class="single-row-left">
                            <a class="popup-video" href="https://www.youtube.com/watch?v=RGua3n09agk">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Siddhant.jpg">
                            </a>
                        </div>
                        <div class="single-row-right">
                            <p class="single-concept-note">
                                Sound, in particular, was significant to me during the pandemic. There were some sounds which irritated me. And others, common in our everyday life, that I had not noticed so profoundly before. My work, therefore, uses both images and sounds.During the pandemic, I began to perceive things in our everyday life very differently. The pandemic has caused us all to attach different positive and negative connotations to so many different experiences and things.

                            </p>
                        </div>
                    </div>
                    <div class="single-row four">
                        <div class="single-row-left">
                            <h3 class="single-name title">Contrast</h3>
                        </div>
                        <div class="single-row-right">
                            <h3 class="single-location">Pune</h3>
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
