<?php


get_header();
?>
<style type="text/css">
body {
    background-color: #312e29;
}
</style>
    <div class="container-rohit">
                
                <div class="single-background rohit">
                    <span id="view-btn" class="view-res-btn">View Details</span>
                    <div id="content-popup" class="white-popup mfp-hide">
                      <h4>Name: Rohit Varekar</h4>
                      <h4>Institute: Sir J. J School of Art</h4>
                      <h4>Location: Mumbai</h4>
                      <p>The pandemic has urged us to be concerned about our health and safety, whether it be through government regulations or self-discipline. We distance ourselves from each other physically as we crave closeness to others, mentally and emotionally. We have been caged in our homes- while animals and birds seemingly move freely.<br>Through this workshop, I have created two objects- one is a headgear, and the other, a two-ringed neck accessory. The headgear is symbolic of being confined, as if our thoughts are in lockdown too. And the neck accessory is a wearable object that one can use while with another individual, outdoors, to maintain social distancing. The images document the objects, and the videos show their implementation in the everyday.
</p>
                    </div>
                    <div class="single-row one">
                        <div class="single-row-left">
                            <h3 class="single-name">Rohit Varekar</h3>
                            <h3 class="single-name title"></h3>
                        </div>
                        <div class="single-row-right">
                            <a class="popup-video" href="https://www.youtube.com/watch?v=SOHqbE6W2aI">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Rohit3.jpg">
                            </a>
                            
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
                            <!-- <a href="<?php echo get_theme_file_uri(); ?>/images/Rohit - rez/1.jpeg">
                                <img class="rohit-img-one" src="<?php echo get_theme_file_uri(); ?>/images/Rohit - rez/1.jpeg">
                            </a> -->
                            <a class="popup-video" href="https://www.youtube.com/watch?v=I-T7PdjLw9U">
                                <img class="rohit-video-two" src="<?php echo get_theme_file_uri(); ?>/images/Rohit1.jpg">
                            </a>
                        </div>
                        <div class="single-row-right popup-gallery">
                            <a href="<?php echo get_theme_file_uri(); ?>/images/Rohit-img.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Rohit-img.jpeg">
                            </a>
                        </div>
                    </div>
                    <div class="single-row three">
                        <div class="single-row-left">
                            <a class="popup-video" href="https://www.youtube.com/watch?v=Z_W192gNfnk">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Rohit2.jpg">
                            </a>
                        </div>
                        <div class="single-row-right">
                        <h3 class="single-location">Mumbai</h3>
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

            jQuery('#view-btn').on("click", function(){
                jQuery.magnificPopup.open({
                  items: {
                      src: '#content-popup',
                      type:'inline'
                  },
                  modal: false
              });
            });
        });
    </script>
