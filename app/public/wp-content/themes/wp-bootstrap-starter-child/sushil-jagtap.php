<?php
/**
 * Template Name: Sushil Jagtap
 */

get_header();
?>

    <section id="primary" class="content-area">
        <div id="main" class="site-main" role="main">
            <div class="container">
                <h2 style="width: 100%; text-align: center;">Sushil Jagtap</h2>
                <div class="single-background sushil">
                    <div class="single-row one">
                        <div class="single-row-left"></div>
                        <div class="single-row-right">
                            
                        </div>
                    </div>
                    <div class="single-row two">
                        <div class="single-row-left">
                            <a class="popup-video" href="https://www.youtube.com/watch?v=tKRPtv9cD2Q">
                                <img id="varsha-two" src="<?php echo get_theme_file_uri(); ?>/images/Varsha 4.0jpg.jpeg">
                            </a>
                        </div>
                        <div class="single-row-right">
                            
                        </div>
                    </div>
                    <div class="single-row three">
                        <div class="single-row-left"></div>
                        <div class="single-row-right">
                            
                        </div>
                    </div>
                    <div class="single-row four">
                        <div class="single-row-left">
                            
                        </div>
                        <div class="single-row-right">
                             <a class="popup-video" href="https://www.youtube.com/watch?v=oddjAbz1iPo">
                                <img id="varsha-two" src="<?php echo get_theme_file_uri(); ?>/images/Varsha 4.0jpg.jpeg">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- #main -->
    </section><!-- #primary -->

    <script type="text/javascript">
       jQuery(document).ready(function() {
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