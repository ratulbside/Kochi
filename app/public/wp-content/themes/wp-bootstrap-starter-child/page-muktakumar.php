<?php


get_header();
?>
            <div class="container-muktakumar">
                <h2 style="width: 100%; text-align: center;">Mukta + Kumar</h2>
                <div class="single-background muktakumar">
                    <div class="single-row one">
                        <div class="single-row-left"></div>
                        <div class="single-row-right popup-gallery">
                            <a href="<?php echo get_theme_file_uri(); ?>/images/Mukta + Kumar - rez/5.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Mukta + Kumar - rez/5.jpeg">
                            </a>
                        </div>
                    </div>
                    <div class="single-row two">
                        <div class="single-row-left popup-gallery">
                            <a href="<?php echo get_theme_file_uri(); ?>/images/Mukta + Kumar - rez/6.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Mukta + Kumar - rez/6.jpeg">
                            </a>
                        </div>
                        <div class="single-row-right">
                            
                        </div>
                    </div>
                    <div class="single-row three">
                        <div class="single-row-left"></div>
                        <div class="single-row-right popup-gallery">
                            <a href="<?php echo get_theme_file_uri(); ?>/images/Mukta + Kumar - rez/3.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Mukta + Kumar - rez/3.jpeg">
                            </a>
                        </div>
                    </div>
                    <div class="single-row four">
                        <div class="single-row-left popup-gallery">
                            <a href="<?php echo get_theme_file_uri(); ?>/images/Mukta + Kumar - rez/7.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Mukta + Kumar - rez/7.jpeg">
                            </a>
                        </div>
                        <div class="single-row-right">
                            
                        </div>
                    </div>
                    <div class="single-row five">
                        <div class="single-row-left">
                            
                        </div>
                        <div class="single-row-right popup-gallery">
                            <a href="<?php echo get_theme_file_uri(); ?>/images/Mukta + Kumar - rez/2.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Mukta + Kumar - rez/2.jpeg">
                            </a>
                        </div>
                    </div>
                    <div class="single-row six">
                        <div class="single-row-left popup-gallery">
                            <a href="<?php echo get_theme_file_uri(); ?>/images/Mukta + Kumar - rez/1.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Mukta + Kumar - rez/1.jpeg">
                            </a>
                        </div>
                        <div class="single-row-right popup-gallery">
                            <a href="<?php echo get_theme_file_uri(); ?>/images/Mukta + Kumar - rez/4.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Mukta + Kumar - rez/4.jpeg">
                            </a>
                        </div>
                    </div>
                </div>
               <?php 
                    get_template_part( 'template-parts/single-switch', 'switch' );
                 ?>
            </div>
        

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
