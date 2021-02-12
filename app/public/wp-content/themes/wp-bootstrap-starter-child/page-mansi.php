<?php


get_header();
?>  
            <div class="container-mansi">
                <!-- <h2 style="width: 100%; text-align: center;">Mansi Rathod</h2> -->
                <div class="single-background mansi">
                    <div class="single-row one">
                        <div class="single-row-left">
                            <h3 class="single-name">Mansi Rathod</h3>
                            <h3 class="single-name">Vasai Vikasini College of Visual Art.</h3>
                        </div>
                        <div class="single-row-right popup-gallery">
                            <a href="<?php echo get_theme_file_uri(); ?>/images/Mansi/Mansi-img2.jpg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Mansi/Mansi-img2.jpg">
                            </a>
                            <a class="popup-video" href="https://www.youtube.com/watch?v=HpSM1n2Yzu0">
                                <img id="mansi-vid-1" src="<?php echo get_theme_file_uri(); ?>/images/Mansi1.jpg">
                            </a>
                            <h3 class="single-location">Mumbai</h3>
                        </div>
                    </div>
                    <div class="single-row two">
                        <div class="single-row-left popup-gallery">
                            <a href="<?php echo get_theme_file_uri(); ?>/images/Mansi/Mansi-img4.jpg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Mansi/Mansi-img4.jpg">
                            </a>
                            <h3 class="single-duration">Duration: 99sec</h3>
                        </div>
                        <div class="single-row-right popup-gallery">
                            <h3 class="single-title">The safety cloth</h3>
                            <a href="<?php echo get_theme_file_uri(); ?>/images/Mansi/Mansi-img3.jpg">
                                <img id="mansi-img-3" src="<?php echo get_theme_file_uri(); ?>/images/Mansi/Mansi-img3.jpg">
                            </a>
                            <a href="<?php echo get_theme_file_uri(); ?>/images/Mansi/Mansi-img1.jpg">
                                <img id="mansi-img-1" src="<?php echo get_theme_file_uri(); ?>/images/Mansi/Mansi-img1.jpg">
                            </a>
                            <a href="<?php echo get_theme_file_uri(); ?>/images/Mansi/Mansi-img5.jpg">
                                <img id="mansi-img-5" src="<?php echo get_theme_file_uri(); ?>/images/Mansi/Mansi-img5.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="single-row three">
                        <div class="single-row-left popup-gallery">
                            <a href="<?php echo get_theme_file_uri(); ?>/images/Mansi/Mansi-img6.jpg">
                                <img id="mansi-img-6" src="<?php echo get_theme_file_uri(); ?>/images/Mansi/Mansi-img6.jpg">
                            </a>
                            <a class="popup-video" href="https://www.youtube.com/watch?v=ayMDUHoeA98">
                                <img id="mansi-vid-2" src="<?php echo get_theme_file_uri(); ?>/images/Mansi2.jpg">
                            </a>
                        </div>
                        <div class="single-row-right popup-gallery">
                            <a class="popup-video" href="https://www.youtube.com/watch?v=Vfmj3_3YidA">
                                <img id="mansi-vid-3" src="<?php echo get_theme_file_uri(); ?>/images/Mansi3.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="single-row four">
                        <div class="single-row-left popup-gallery">
                            
                        </div>
                        <div class="single-row-right">
                            <div class="single-concept-note">
                            <p> The pandemic has hit us all in ways we could never have imagined.  Much like a thread can bind two pieces of cloth, the pandemic has, for me, acted as a thread that strengthened my relationship with many important people in my life.     

Just like the nature of various kinds of thread differs, the pandemic has revealed to me, the relationships that were frail or raw, or weak. 

The lockdown allowed me to learn sewing from my mother. And at a time when we are afraid of touching objects with our bare hands, in fear of infection, I have used these basic stitching skills to create something that would help me pick things up while staying safe.

                            </p>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>

            <?php 
                get_template_part( 'template-parts/single-switch', 'switch' );

             ?>
        </div><!-- #main -->
    </section><!-- #primary -->

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

