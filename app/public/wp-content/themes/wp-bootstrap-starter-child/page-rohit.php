<?php


get_header();
?>

    
            <div class="container-rohit">
                <h2 style="width: 100%; text-align: center;">Rohit</h2>
                <div class="single-background rohit">
                    <div class="single-row one">
                        <div class="single-row-left">
                            
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
