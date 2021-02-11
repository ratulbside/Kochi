<?php


get_header();
?>

    <div class="container-rohit">
                
                <div class="single-background rohit">
                    <div class="single-row one">
                        <div class="single-row-left">
                            <h3 class="single-name">Rohit Varekar</h3>
                            <h3 class="single-name title"></h3>
                        </div>
                        <div class="single-row-right">
                            <a class="popup-video" href="https://www.youtube.com/watch?v=kqoVZFX-rEA">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Rohit 3.jpg">
                            </a>
                            <h3 class="single-location">Mumbai</h3>
                        </div>
                    </div>
                    <div class="single-row text-rohit">
                        <div class="single-row-left">
                            <h3 class="single-duration">Duration: 1.44</h3>
                        </div>
                        <div class="single-row-right">
                            <h3 class="single-institute">Sir J. J School of Art</h3>
                        </div>
                    </div>
                    <div class="single-row two">
                        <div class="single-row-left popup-gallery">
                            <a href="<?php echo get_theme_file_uri(); ?>/images/Rohit - rez/1.jpeg">
                                <img class="rohit-img-one" src="<?php echo get_theme_file_uri(); ?>/images/Rohit - rez/1.jpeg">
                            </a>
                            <a class="popup-video" href="https://www.youtube.com/watch?v=I-T7PdjLw9U">
                                <img class="rohit-video-two" src="<?php echo get_theme_file_uri(); ?>/images/Rohit 1.jpg">
                            </a>
                        </div>
                        <div class="single-row-right popup-gallery">
                            <a href="<?php echo get_theme_file_uri(); ?>/images/Rohit - rez/1.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Rohit - rez/1.jpeg">
                            </a>
                        </div>
                    </div>
                    <div class="single-row three">
                        <div class="single-row-left">
                            <a class="popup-video" href="https://www.youtube.com/watch?v=Z_W192gNfnk">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Rohit 2.jpg">
                            </a>
                        </div>
                        <div class="single-row-right">
                             
                        </div>
                    </div>
                    <div class="single-row four">
                        <div class="single-row-left">
                            <p class="single-concept-note">
                               The pandemic has urged us to be concerned about our health and safety, whether it be through government regulations or self-discipline. We distance ourselves from each other physically as we crave closeness to others, mentally and emotionally. We have been caged in our homes- while animals and birds seemingly move freely. Through this workshop, I have created two objects- one is a headgear, and the other, a two-ringed neck accessory. The headgear is symbolic of being confined, as if our thoughts are in lockdown too. And the neck accessory is a wearable object that one can use while with another individual, outdoors, to maintain social distancing. The images document the objects, and the videos show their implementation in the everyday.

                            </p>
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
