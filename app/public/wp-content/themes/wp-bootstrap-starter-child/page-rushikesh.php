<?php


get_header();
?>

            <div class="container-rushikesh">
                <div class="single-background rushikesh">
                    <div class="single-row one">
                        <div class="single-row-left">
                            
                        </div>
                        <div class="single-row-right">
                            
                        </div>
                    </div>
                    <div class="single-row two">
                        <div class="single-row-left">
                            <h3 class="single-name">Rushikesh R. Potrekar</h3>
                            <h3 class="single-name title">illusion ?</h3>
                        </div>
                        <div class="single-row-right">
                            <a class="popup-video" href="https://www.youtube.com/watch?v=73sxGW_67QE">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Rushikesh.jpg">
                            </a>
                            <h3 class="single-duration">Duration: 0:51</h3>
                        </div>
                    </div>
                    <div class="single-row three">
                        <div class="single-row-left">
                            <h3 class="single-institute">Bharti vidyapeeth College of Fine Arts</h3>
                        </div>
                        <div class="single-row-right">
                            <h3 class="single-location">Pune</h3> 
                        </div>
                    </div>
                    <div class="single-row four">
                        <div class="single-row-left popup-gallery">
                            
                        </div>
                        <div class="single-row-right">
                            <p class="single-concept-note">
                                As the originally 21 day lockdown continues to extend, I began focusing more on the news and began studying many different things. This artwork is a reflection of this time where in I tried many new things, including pranks. This visual work, I believe, is strategic. It is about what I make others see. Where I set a script or theme for people to see, without them realising that it is an illusion.

                            </p>
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
