<?php
/**
 * Template Name: Blank with Container
 */

 get_header();
?>
<div id="content" class="site-content">
    <div class="container">
        <div class="row">
            <section id="primary" class="content-area non-floor">
                <div id="main" class="site-main" role="main">
                    <?php 
                get_template_part( 'template-parts/single-switch', 'switch' );

             ?>
                    <div class="container">
                        <header class="entry-header">
                            <h1 class="entry-title">
                                A wide gap (of) remains
                            </h1>
                        </header>
                        <div class="entry-content mentor-videos">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=SOHqbE6W2aI">
                                        <img src="<?php echo get_theme_file_uri(); ?>/images/mentor/1.jpg">
                                    </a>
                                </div>
                                <div class="col-12 col-md-4">
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=cU3R_CkBNOU">
                                        <img src="<?php echo get_theme_file_uri(); ?>/images/mentor/2.jpg">
                                    </a>
                                </div>
                                <div class="col-12 col-md-4">
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=Qsy_idpqGBQ">
                                        <img src="<?php echo get_theme_file_uri(); ?>/images/mentor/3.jpg">
                                    </a>
                                </div>
                                <div class="col-12 col-md-4">
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=rmCQgzd9zTU">
                                        <img src="<?php echo get_theme_file_uri(); ?>/images/mentor/4.jpg">
                                    </a>
                                </div>
                                <div class="col-12 col-md-4">
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=ZPlK3xm2Xi4">
                                        <img src="<?php echo get_theme_file_uri(); ?>/images/mentor/5.jpg">
                                    </a>
                                </div>
                                <div class="col-12 col-md-4">
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=yfO6X-S-Kvg">
                                        <img src="<?php echo get_theme_file_uri(); ?>/images/mentor/6.jpg">
                                    </a>
                                </div>
                                <div class="col-12 col-md-4">
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=MN5PbhDnTl4">
                                        <img src="<?php echo get_theme_file_uri(); ?>/images/mentor/7.jpg">
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div><!-- #main -->
            </section><!-- #primary -->

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



            <?php
get_footer();
?>