<?php


get_header();
?>
<style type="text/css">
body {
    background-color: #b2aa9f;
}
</style>
            <div class="container-sawani">
                <div class="single-background sawani">
                    <span id="view-btn" class="view-res-btn">View Details</span>
                    <div id="content-popup" class="white-popup mfp-hide">
                      <h4>Name: Sawani Chaudhary</h4>
                      <h4>Institute: J. J. School of Art BFA</h4>
                      <h4>Location: Mumbai</h4>
                      <h4>Title: Everyday, again</h4>
                      <h4>Medium: Video</h4>
                      <h4>Duration: 2:46</h4>
                      <p>Living in a house for months, without stepping out, made me conscious of myself, my growth, and decay. Whether it was in hair fall, small bruises, or weight loss.<br>Due to the silence during the lockdown, insignificant sounds became piercing- like turning on the switches or scratching. I have combined such sounds and visuals and created videos.<br>These videos emphasize the sound and movement at home through everyday activities.<br>The videos are projected, and have been intentionally left raw in an attempt to create a mundane repetition of the everyday. The visuals are playing in the same space as they were initially filmed to establish a relationship between the past and present.</p>
                    </div>
                    <div class="single-row one">
                        <div class="single-row-left">
                            <a class="popup-video" href="https://www.youtube.com/watch?v=geVLyRxk_TQ">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Sawani1.jpg">
                            </a>
                        </div>
                        <div class="single-row-right">
                            <h3 class="single-name title">Everyday, again</h3>
                            <h3 class="single-duration">Medium- Video</h3>
                            <h3 class="single-medium">Duration: 2:46</h3>
                        </div>
                    </div>
                    <div class="single-row two">
                        <div class="single-row-left">
                            <a class="popup-video" href="https://www.youtube.com/watch?v=jkxGt2VzVL4">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Sawani2.jpg">
                            </a>
                            <h3 class="single-name artist">Sawani Chaudhary</h3>
                        </div>
                        <div class="single-row-right">
                            <p class="single-concept-note">
                                Living in a house for months, without stepping out, made me conscious of myself, my growth, and decay. Whether it was in hair fall, small bruises, or weight loss. Due to the silence during the lockdown, insignificant sounds became piercing- like turning on the switches or scratching. I have combined such sounds and visuals and created videos. These videos emphasize the sound and movement at home through everyday activities. The videos are projected, and have been intentionally left raw in an attempt to create a mundane repetition of the everyday. The visuals are playing in the same space as they were initially filmed to establish a relationship between the past and present.


                            </p>
                        </div>
                    </div>
                    <div class="single-row three">
                        <div class="single-row-left">
                            <h3 class="single-institute">J. J. School of Art BFA</h3>
                            <a class="popup-video" href="https://www.youtube.com/watch?v=8lS22-OLSDI">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Sawani3.jpg">
                            </a>
                            <h3 class="single-location">Mumbai</h3>
                        </div>
                        <div class="single-row-right">
                             <a class="popup-video" href="https://www.youtube.com/watch?v=77aURUHJsmo">
                                <img id="sawani-video-four" src="<?php echo get_theme_file_uri(); ?>/images/Sawani4.jpg">
                            </a>
                            <a class="popup-video" href="https://www.youtube.com/watch?v=cB_sQmHuYgw">
                                <img id="sawani-video-five" src="<?php echo get_theme_file_uri(); ?>/images/Sawani5.jpg">
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
<?php
get_footer();
?>
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
