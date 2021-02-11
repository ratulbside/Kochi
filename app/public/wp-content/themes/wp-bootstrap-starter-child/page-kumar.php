<?php


get_header();
?>

    <div class="container-kumar-mishal">
                <!-- <h2 style="width: 100%; text-align: center;">Kumar Misal</h2> -->
                <div class="single-background kumar-mishal">
                    <div class="single-row one">
                        <div class="single-row-left popup-gallery">
                        <a href="<?php echo get_theme_file_uri(); ?>/images/Kumar Misal -rez/1.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Kumar Misal -rez/1.jpeg">
                            </a>
                            <a href="<?php echo get_theme_file_uri(); ?>/images/Kumar Misal -rez/2.jpeg">
                                <img class="2nd-img" src="<?php echo get_theme_file_uri(); ?>/images/Kumar Misal -rez/2.jpeg">
                            </a>
                        </div>
                        <div class="single-row-right popup-gallery">
                        <a href="<?php echo get_theme_file_uri(); ?>/images/Kumar Misal -rez/3.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Kumar Misal -rez/3.jpeg">
                            </a>
                            
                            <div class="single-concept-note">
                                <p>
                                In the midst of the pandemic, the importance of nature, for humans has heightened. And home has been a safe space for many of us through this crisis. I have, in the course of this crisis, developed a deep conversation and relationship with everyday objects such as the sofa, fan, window, chair while sketching them. 
                                </p>
                                <p>Many things become dear to us in this time, and many others have stopped being objects of affection. I have attempted to talk about these experiences through my work.</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-row two">
                        <div class="single-row-left popup-gallery">
                        
                        </div>
                        <div class="single-row-right">
                        <a href="<?php echo get_theme_file_uri(); ?>/images/Kumar Misal -rez/4.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Kumar Misal -rez/4.jpeg">
                            </a>
                            <a href="<?php echo get_theme_file_uri(); ?>/images/Kumar Misal -rez/5.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Kumar Misal -rez/5.jpeg">
                            </a>
                        </div>
                    </div>
                    <div class="single-row three">
                        <div class="single-row-left"></div>
                        <div class="single-row-right popup-gallery">
                            
                        </div>
                    </div>
                    <div class="single-row four">
                        <div class="single-row-left popup-gallery">
                            
                        </div>
                        <div class="single-row-right">
                        <a href="<?php echo get_theme_file_uri(); ?>/images/Kumar Misal -rez/6.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Kumar Misal -rez/6.jpeg">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <?php 
                get_template_part( 'template-parts/single-switch', 'switch' );

             ?>

    <script type="text/javascript">
       jQuery(function() {
            jQuery('.popup-gallery').magnificPopup({
                delegate: 'a',
                type: 'image',
                tLoading: 'Loading image #%curr%...',
                mainClass: 'mfp-img-mobile',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                },
                image: {
                    tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
                }
            });

            
        });
    </script>

