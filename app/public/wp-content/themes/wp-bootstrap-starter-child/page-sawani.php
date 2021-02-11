<?php


get_header();
?>
            <div class="container-sawani">
                <div class="single-background sawani">
                    <div class="single-row one">
                        <div class="single-row-left">
                            <a class="popup-video" href="https://www.youtube.com/watch?v=geVLyRxk_TQ">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Sawani 1.jpg">
                            </a>
                        </div>
                        <div class="single-row-right">
                            <h3 class="single-name title">Everyday, again</h3>
                            <h3 class="single-duration">Duration: 2:46</h3>
                            <h3 class="single-medium">video</h3>
                        </div>
                    </div>
                    <div class="single-row two">
                        <div class="single-row-left">
                            <a class="popup-video" href="https://www.youtube.com/watch?v=jkxGt2VzVL4">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Sawani 2.jpg">
                            </a>
                            <h3 class="single-name">Sawani Chaudhary</h3>
                        </div>
                        <div class="single-row-right">
                            <p class="single-concept-note">
                                Living in a house for months, without stepping out, made me conscious of myself, my growth, and decay. Whether it was in hair fall, small bruises, or weight loss. Due to the silence during the lockdown, insignificant sounds became piercing- like turning on the switches or scratching. I have combined such sounds and visuals and created videos. These videos emphasize the sound and movement at home through everyday activities. The videos are projected, and have been intentionally left raw in an attempt to create a mundane repetition of the everyday. The visuals are playing in the same space as they were initially filmed to establish a relationship between the past and present.


                            </p>
                        </div>
                    </div>
                    <div class="single-row three">
                        <div class="single-row-left">
                            <h3 class="single-institute">J. J. School of Art BFA</h3>
                            <a class="popup-video" href="https://www.youtube.com/watch?v=8lS22-OLSDI">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Sawani 3.jpg">
                            </a>
                            <h3 class="single-location">Mumbai</h3>
                        </div>
                        <div class="single-row-right">
                             <a class="popup-video" href="https://www.youtube.com/watch?v=77aURUHJsmo">
                                <img id="sawani-video-four" src="<?php echo get_theme_file_uri(); ?>/images/Sawani 4.jpg">
                            </a>
                            <a class="popup-video" href="https://www.youtube.com/watch?v=cB_sQmHuYgw">
                                <img id="sawani-video-five" src="<?php echo get_theme_file_uri(); ?>/images/Sawani 5.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="single-row four">
                        <div class="single-row-left popup-gallery">
                            
                        </div>
                        <div class="single-row-right">
                            
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
