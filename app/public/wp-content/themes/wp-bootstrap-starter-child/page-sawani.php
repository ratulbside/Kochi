<?php


get_header();
?>
            <div class="container-sawani">
                <h2 style="width: 100%; text-align: center;">Sawani</h2>
                <div class="single-background sawani">
                    <div class="single-row one">
                        <div class="single-row-left">
                            <a class="popup-video" href="https://www.youtube.com/watch?v=geVLyRxk_TQ">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Sawani 1.jpg">
                            </a>
                        </div>
                        <div class="single-row-right">
                            
                        </div>
                    </div>
                    <div class="single-row two">
                        <div class="single-row-left">
                            <a class="popup-video" href="https://www.youtube.com/watch?v=jkxGt2VzVL4">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Sawani 2.jpg">
                            </a>
                        </div>
                        <div class="single-row-right">
                            
                        </div>
                    </div>
                    <div class="single-row three">
                        <div class="single-row-left">
                            <a class="popup-video" href="https://www.youtube.com/watch?v=8lS22-OLSDI">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Sawani 3.jpg">
                            </a>
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
