<?php


get_header();
?>
<style type="text/css">
body {
    background-color: #716b69;
}
</style>
            <div class="container-muktakumar">
                <div class="single-background muktakumar">
                    <span id="view-btn" class="view-res-btn muktakumar-btn">View Details</span>
                    <div id="content-popup" class="white-popup mfp-hide">
                      <h4>Name: Mukta Vaidya + Kumar Misal</h4>
                      <h4>Title: Spun Candy</h4>
                      <h4>Medium: Multimedia</h4>
                      <p>Spun Candy is a metaphorical rendering. It is associated with the characteristics of cotton candy- pink, soft, sensitive, dense and layered. It represents the various overlapping incidents faced by women at home.</p>
                    </div>
                    <div class="single-row one">
                        <div class="single-row-left">
                            <h3 class="single-name">Mukta Vaidya + Kumar Misal</h3>
                        </div>
                        <div class="single-row-right popup-gallery">
                            <a href="<?php echo get_theme_file_uri(); ?>/images/MuktaKumar/5.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/MuktaKumar/5.jpeg">
                            </a>
                            <h3 class="single-name title">Spun Candy</h3>
                        </div>
                    </div>
                    <div class="single-row two">
                        <div class="single-row-left popup-gallery">
                            <a href="<?php echo get_theme_file_uri(); ?>/images/MuktaKumar/6.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/MuktaKumar/6.jpeg">
                            </a>
                        </div>
                        <div class="single-row-right">
                            <p class="single-concept-note">
                                Spun Candy is a metaphorical rendering. It is associated with the characteristics of cotton candy- pink, soft, sensitive, dense and layered. It represents the various overlapping incidents faced by women at home. 
                            </p>
                        </div>
                    </div>
                    <div class="single-row three">
                        <div class="single-row-left">
                            <h3 class="single-medium">Medium : Multimedia</h3>
                        </div>
                        <div class="single-row-right popup-gallery">
                            <a href="<?php echo get_theme_file_uri(); ?>/images/MuktaKumar/3.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/MuktaKumar/3.jpeg">
                            </a>
                        </div>
                    </div>
                    <div class="single-row four">
                        <div class="single-row-left popup-gallery">
                            <a href="<?php echo get_theme_file_uri(); ?>/images/MuktaKumar/7.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/MuktaKumar/7.jpeg">
                            </a>
                        </div>
                        <div class="single-row-right">
                            
                        </div>
                    </div>
                    <div class="single-row five">
                        <div class="single-row-left">
                            <h3 class="single-location"></h3>
                        </div>
                        <div class="single-row-right popup-gallery">
                            <a href="<?php echo get_theme_file_uri(); ?>/images/MuktaKumar/2.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/MuktaKumar/2.jpeg">
                            </a>
                        </div>
                    </div>
                    <div class="single-row six">
                        <div class="single-row-left popup-gallery">
                            <a href="<?php echo get_theme_file_uri(); ?>/images/MuktaKumar/1.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/MuktaKumar/1.jpeg">
                            </a>
                        </div>
                        <div class="single-row-right popup-gallery">
                            <a href="<?php echo get_theme_file_uri(); ?>/images/MuktaKumar/4.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/MuktaKumar/4.jpeg">
                            </a>
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
