<?php


get_header();
?>

    <div class="container-rohit">
                
                <div class="single-background rohit">
                    <div class="single-row one">
                        <div class="single-row-left">
                            <h3 class="single-name">Rohit Varekar</h3>
                        </div>
                        <div class="single-row-right">
                            <a class="popup-video" href="https://www.youtube.com/watch?v=kqoVZFX-rEA">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Rohit 3.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="single-row two">
                        <div class="single-row-left">
                            <a class="popup-video" href="https://www.youtube.com/watch?v=I-T7PdjLw9U">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Rohit 1.jpg">
                            </a>
                        </div>
                        <div class="single-row-right">
                            
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
                                To stay safe from Corona we adopted the Lockdown as a self-responsibility. Being in closed spaces became intolerable and we eagerly waited for it to end. Through this video, I have tried to show the impatience each of us had for the Lockdown to get over.
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
