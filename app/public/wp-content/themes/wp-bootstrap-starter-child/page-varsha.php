<?php


get_header();
?>
<style type="text/css">
body {
    background-color: #c3c0bb;
}
</style>
            <div class="container-varsha">
                <div class="single-background varsha">
                    <span id="view-btn" class="view-res-btn varsha-btn">View Details</span>
                    <div id="content-popup" class="white-popup mfp-hide">
                      <h4>Name: Varsha Umate</h4>
                      <h4>Institute: Government College of Art And Design, Nagpur</h4>
                      <h4>Location: Nagpur</h4>
                      <p>Through my work, I have tried to depict the condition of people during the lockdown. The lockdown has affected three main areas-  limiting going outside of the home, social distancing when outside and restricting availability of most public services. With the "stay home and stay safe" policy, most people have become like fish in a bowl. Where one is safe when they are at home, and it becomes risky the moment you go out.</p>
                    </div>
                    <div class="single-row one">
                        <div class="single-row-left popup-gallery">
                            <h3 class="single-name">Varsha Umate</h3>
                            <a href="<?php echo get_theme_file_uri(); ?>/images/Varsha2.jpeg">
                                <img id="varsha-two" src="<?php echo get_theme_file_uri(); ?>/images/Varsha2.jpeg">
                            </a>
                        </div>
                        <div class="single-row-right popup-gallery">
                            <a href="<?php echo get_theme_file_uri(); ?>/images/Varsha1.jpeg">
                                <img id="varsha-one" src="<?php echo get_theme_file_uri(); ?>/images/Varsha1.jpeg">
                            </a>
                            <p class="single-concept-note">
                                <br><br>
                                Through my work, I have tried to depict the condition of people during the lockdown. The lockdown has affected three main areas-  limiting going outside of the home, social distancing when outside and restricting availability of most public services. With the "stay home and stay safe" policy, most people have become like fish in a bowl. Where one is safe when they are at home, and it becomes risky the moment you go out.
                            </p>
                        </div>
                    </div>
                    <div class="single-row two">
                        <div class="single-row-left">
                            
                        </div>
                        <div class="single-row-right popup-gallery">
                            <a href="<?php echo get_theme_file_uri(); ?>/images/Varsha3.jpeg">
                                <img id="varsha-three" src="<?php echo get_theme_file_uri(); ?>/images/Varsha3.jpeg">
                            </a> 
                        </div>
                    </div>
                    <div class="single-row three">
                        <div class="single-row-left">
                            <h3 class="single-institute">Government College of Art And Design, Nagpur</h3>
                        </div>
                        <div class="single-row-right">
                            <h3 class="single-location">Nagpur</h3>
                        </div>
                    </div>
                    <div class="single-row four">
                        <div class="single-row-left popup-gallery">
                            <a href="<?php echo get_theme_file_uri(); ?>/images/Varsha4.jpeg">
                                <img id="varsha-four" src="<?php echo get_theme_file_uri(); ?>/images/Varsha4.jpeg">
                            </a>
                            <h3 class="single-medium">MEDIUM - photos</h3>
                        </div>
                        <div class="single-row-right">
                            
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
