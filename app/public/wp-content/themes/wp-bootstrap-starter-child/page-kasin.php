<?php


get_header();
?>
            <div class="container-kasin">
                <h2 style="width: 100%; text-align: center;">Kasin</h2>
                <div class="single-background kasin">
                    <div class="single-row one">
                        <div class="single-row-left"></div>
                        <div class="single-row-right">
                            <a class="popup-video" href="https://www.youtube.com/watch?v=dQWg9QoWt7c">
                                <img id="varsha-two" src="<?php echo get_theme_file_uri(); ?>/images/Kashin.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="single-row two">
                        <div class="single-row-left">
                            
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

